<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Update;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Modules\Xot\DTOs\RelationDTO;
use Spatie\QueueableAction\QueueableAction;

class BelongsToManyAction
{
    use QueueableAction;

    public function execute(Model $model, RelationDTO $relationDTO): void
    {
        // dddx(['row' => $row, 'relation' => $relation]);
        if (\in_array('to', array_keys($relationDTO->data), true) || \in_array('from', array_keys($relationDTO->data), true)) {
            // $this->saveMultiselectTwoSides($row, $relation->name, $relation->data);
            $to = $relationDTO->data['to'] ?? [];

            $model->{$relationDTO->name}()->sync($to);
            $status = 'collegati ['.implode(', ', $to).'] ';
            Session::flash('status', $status);

            return;
        }

        $ids = [];
        $keyName = $relationDTO->related->getKeyName();

        foreach ($relationDTO->data as $data) {
            if (in_array($keyName, array_keys($data))) {
                $related_id = $data[$keyName];
                $row = $relationDTO->related->firstOrCreate([$keyName => $related_id]);
                $res = app(\Modules\Xot\Actions\Model\UpdateAction::class)->execute($row, $data, []);
                $ids[] = $related_id;
            }
        }

        dddx($ids);
        /*
        try{
            $model->{$relationDTO->name}()->sync($relationDTO->data);
        }catch(\Exception $e){
            dddx([
                'message'=>$e->getMessage(),
                'model'=>$model,
                'relationDTO'=>$relationDTO,
            ]);
        }
        */
    }
}
