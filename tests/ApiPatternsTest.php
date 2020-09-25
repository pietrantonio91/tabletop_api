<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ApiPatternsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAllPatterns()
    {
        $this->get('/api/patterns');

        $this->assertResponseStatus(200);

        // $this->seeStatusCode(200);
        $this->seeJsonStructure([
            [
                'id',
                'name',
                'tag',
                'definition',
                'description',
                'created_at',
                'updated_at',
                'categories',
                'issues'
            ]
        ]);
    }
}
