<?php

namespace XDesk;

use Illuminate\Support\Facades\Http;

class XDesk
{
    public $companyID, $clientID, $adminID;
    public function __construct($companyID, $clientID, $adminID)
    {
        $this->companyID = $companyID;
        $this->clientID = $clientID;
        $this->adminID = $adminID;
    }
    public function getURL($name, $email, $details, $isAdmin)
    {
        $headers = [
            'companyId' => $this->companyID,
            'clientId' => $this->clientID,
            'adminId' => $this->adminID,
        ];

        $postData = [
            'name' => $name,
            'email' => $email,
            'details' => $details,
            'isAdmin' => $isAdmin,
        ];

        $response = Http::withHeaders($headers)
            ->post('https://package.viserx.dev/api/client', $postData);
        if ($response->successful()) {
            return $response;
        } else {
            info($response->status());
            return response('Error making API request', $response->status());
        }
    }
}