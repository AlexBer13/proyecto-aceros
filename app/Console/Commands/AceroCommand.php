<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Acero;

class AceroCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Acero:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creamos un post en la base de datos';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $Acero = new Acero;
        $Acero->save();
    }
}
