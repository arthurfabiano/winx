<?php

namespace App\Jobs;

use App\Mail\SendOrcamento;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailBudget implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;

    protected $orcamento;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($orcamento)
    {
        $this->orcamento = $orcamento;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->orcamento->email_contato)->send(new SendOrcamento($this->orcamento));
    }
}
