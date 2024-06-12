#!/bin/bash
source ./.env
source ./.auth
curl --request POST \
     --url ''$api_url'/oauth2/token?client_id='$client_id'&client_secret='$client_secret'&grant_type=refresh_token&refresh_token='$refresh_token'' \
     --header 'accept: application/json' \
     --header 'Authorization: Bearer '$token''