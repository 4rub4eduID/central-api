#!/bin/bash
source ./.env
input_token=$1
curl --request GET \
     --url ''$api_url'/configuration/v2/groups?limit=100&offset=0' \
     --header 'accept: application/json' \
     --header 'Authorization: Bearer '$input_token''