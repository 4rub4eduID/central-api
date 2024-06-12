#!/bin/bash
source ./.env
source ./.auth
input_sn=$1
curl --request GET \
     --url ''$api_url'/configuration/v2/ap_settings/'$input_sn'' \
     --header 'accept: application/json' \
     --header 'Authorization: Bearer '$token''