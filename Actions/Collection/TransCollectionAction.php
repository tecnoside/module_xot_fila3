<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class TransCollectionAction {
    use QueueableAction;

    public string|null $transKey;

    public function execute(
        Collection $collection,
        ?string $transKey,
    ): Collection {
         if (null == $transKey) {
            return $collection;
         }

         $this->transKey=$transKey;

        $collection = $collection->map(fn($item):string => $this->trans($item));
            
        return $collection;
    }


    /** 
     * @param mixed $item
     */
    public function trans($item):string{
        if(!is_string($item)){
            dddx($item);
            return '';
        }
        $transKey=$this->transKey;
        $key = $transKey.'.'.$item;
        $trans = trans($key);
        if ($trans !== $key) {
            return $trans;
        }

        Assert::string($item1 = Str::replace('.', '_', $item));
        $key = $transKey.'.'.$item1;
        $trans = trans($key);
        if ($trans !== $key) {
            return $trans;
        }

        return $item;

    }
}
