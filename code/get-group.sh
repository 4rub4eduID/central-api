#!/bin/bash
source ./.env
curl --request GET \
     --url ''$api_url'/configuration/v2/groups?limit=100&offset=0' \
     --header 'accept: application/json' \
     --header 'Authorization: Bearer '$token''