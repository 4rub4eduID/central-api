#!/bin/bash
input_sn=$1
input_token=$2
curl --request GET \
     --url "https://apigw-apaceast.central.arubanetworks.com/configuration/v2/ap_settings/${input_sn}" \
     --header "accept: application/json" \
     --header "Authorization: Bearer ${input_token}"