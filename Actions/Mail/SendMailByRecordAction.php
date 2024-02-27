<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Mail;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class SendMailByRecordAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     *
     * @return bool
     */
    public function execute(Model $record, string $mail_class)
    {
        if (! $record->canSendEmail()) {
            return false;
        }
        // non uso il gate perche' se no superadmin puo' far casino
        // if (! Gate::allows('send-mail', $record)) {
        //    dddx('NO');
        // }
        $record_class = get_class($record);
        $log_class = Str::of($record_class)
            ->before('\Models')
            ->append('\Models\MyLog')
            ->toString();

        $to = $record->email;
        $to = 'marco.sottana@gmail.com';

        Mail::to($to)->send(new $mail_class($record));
        $record->myLogs()->create(['act' => 'sendMail']);

        /*
        $log_class::create([
            'id_tbl'=>$record->id,
            'tbl'=>$record->getTable(),
            'act'=>'sendMail',
            'handle'=>Auth::id(),
        ]);
        */

        return true;
    }
}
