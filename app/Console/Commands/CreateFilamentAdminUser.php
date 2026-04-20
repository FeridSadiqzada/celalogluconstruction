<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateFilamentAdminUser extends Command
{
    protected $signature = 'admin:create-user
                            {email : Filament üçün e-poçt (yalnız @celaloglu.az)}
                            {--name=Administrator : Tam ad}
                            {--password= : Şifrə — verilməzsə təsadüfi yaradılır}';

    protected $description = 'Filament paneli üçün təsdiqlənmiş admin istifadəçisi yaradır və ya yeniləyir';

    public function handle(): int
    {
        $email = strtolower(trim($this->argument('email')));

        if (! str_ends_with($email, '@celaloglu.az')) {
            $this->components->error('Filament girişi üçün e-poçt @celaloglu.az ilə bitməlidir (User::canAccessPanel).');

            return self::FAILURE;
        }

        $name = (string) $this->option('name');
        $plain = $this->option('password');

        if ($plain === null || $plain === '') {
            $plain = Str::password(length: 16, symbols: true);
            $generated = true;
        } else {
            $generated = false;
        }

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $plain,
                'email_verified_at' => now(),
            ],
        );

        $action = $user->wasRecentlyCreated ? 'yaradıldı' : 'yeniləndi';

        $this->components->info("İstifadəçi {$action}: {$user->email}");

        if ($generated) {
            $this->newLine();
            $this->components->warn('Şifrə (dəftərə yazın — təkrar göstərilməyəcək):');
            $this->line('  '.$plain);
        }

        $this->newLine();
        $this->comment('Filament: '.url('/admin/login'));

        return self::SUCCESS;
    }
}
