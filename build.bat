#!/bin/bash


git clone https://github.com/rok9ru/trpo-core.git "core"

git symbolic-ref --short -q HEAD > version

cd core
rm -rf .git composer* .gitignore
mv core/* .
rm -rf core