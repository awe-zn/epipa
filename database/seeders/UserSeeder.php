<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    return User::create([
      'name' => 'Daniel Souza',
      'email' => 'test@email.com',
      'phone_number' => '849914269298',
      'password' => Hash::make('12345678')
    ]);
  }
}
