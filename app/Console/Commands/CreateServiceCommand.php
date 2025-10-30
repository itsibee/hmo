<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class CreateServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:service {name : The name of the service class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    /**
     * The Filesystem instance.
     */
    protected Filesystem $files;

    /**
     * Directory permissions.
     */
    private const DIRECTORY_PERMISSIONS = 0755;

    /**
     * Create a new command instance.
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $namespace = 'App\\Operations\\Services';
        $path = app_path('Operations/Services');

        // Ensure directory exists
        if (! $this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, self::DIRECTORY_PERMISSIONS, true);
        }

        // Define file path and class content
        $filePath = $path.'/'.$name.'.php';

        if ($this->files->exists($filePath)) {
            $this->error("The service class {$name} already exists.");

            return Command::FAILURE;
        }

        $stub = $this->getStub();
        $content = str_replace(
            ['{{ namespace }}', '{{ class }}'],
            [$namespace, $name],
            $stub
        );

        $this->files->put($filePath, $content);

        $this->info("Service class {$name} created successfully.");

        return Command::SUCCESS;
    }

    /**
     * Get the service class stub.
     */
    /**
     * Get the service class stub.
     */
    protected function getStub(): string
    {
        return <<<'EOT'
<?php

namespace {{ namespace }};

class {{ class }}
{
    /**
     * Add service logic here.
     */
}
EOT;
    }
}
