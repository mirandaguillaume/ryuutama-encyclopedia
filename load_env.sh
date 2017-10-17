#!/usr/bin/env bash

var=$(egrep -v '^#' .env | xargs)

export $var