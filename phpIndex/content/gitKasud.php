<?php
echo "<h2>GIT CMD käsurida</h2>";
echo "<ol>";
echo "<li>git init - uus repo
git config --global user.name "matumatumatumatumatu"

git config --global user.email "kaja.martten@gmail.com"
git config --global --list

//ssh võti loomine
 ssh-keygen -o -t rsa -C "kaja.martten@gmail.com"
 //võti salvestatakse opilane/.ssh kausta
 //id_rsa.pub tuleb kopeeerida oma git hub -reposse
 git add .
 git commit -a -m "on loodud phpIndex"
 git remote remove origin
//
git remote add origin git@github.com:matumatumatumatumatu/phpIndexTarpe24.git
git branch -M main
git push -u origin main";
