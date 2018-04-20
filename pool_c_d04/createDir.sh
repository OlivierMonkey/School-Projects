#!/bin/bash

i=$1

while [ $i -gt 0 ]
do
    if [ $i -lt 10 ]; then
	if [ ! -d ex_0$i ]; then	    
	    mkdir "ex_0"$i
	fi
    else
	if [ ! -d ex_$i ]; then
	    mkdir "ex_"$i
	fi
    fi
    let i-=1
done
