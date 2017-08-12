<?php

namespace Hoanglek13\PassportMongoDB\Http\Controllers;

use Hoanglek13\PassportMongoDB\Passport;

class ScopeController
{
    /**
     * Get all of the available scopes for the application.
     *
     * @return Response
     */
    public function all()
    {
        return Passport::scopes();
    }
}
