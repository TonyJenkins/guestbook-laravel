<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guest_book_entries')->insert([
            'user' => 'Catrin Morgan',
            'comment' => 'Nice use of contrast in this colour palette.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Cletus Spalding',
            'comment' => 'It\'s splendid not just sleek!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Grigor Martel',
            'comment' => 'This is alluring work!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Finnegan Draper',
            'comment' => 'Super thought out! Leading the way, mate.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Zac Quincy',
            'comment' => 'My 49 year old daughter rates this shot very splendid :)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Grigor Martel',
            'comment' => 'Such shot, many button, so simple.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Terrence Sutherland',
            'comment' => 'Looks revolutionary and admirable, friend.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Terrence Sutherland',
            'comment' => 'I want to learn this kind of shot! Teach me.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Zac Quincy',
            'comment' => 'Incredible work you have here.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Grigor Martel',
            'comment' => 'Engaging. It keeps your mind occupied while you wait.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Katharine McKenzie',
            'comment' => 'White. This is new school.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('guest_book_entries')->insert([
            'user' => 'Zac Quincy',
            'comment' => 'I approve your shot.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
