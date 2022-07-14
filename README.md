PHP project
Objetive: Realize CRUD basic sentences with php as backend


Install necessary plugins to programm on php
- PHP instelliSense
- PHP Debug


PHP DEBUG - steps
1. go to "xdebug installation wizard"
2. copy data info of your php from the main web localhost
![](images/2022-07-14-00-11-38.png)
2.1 then press ctrl+a to select all info and ctrl+c to copy to clipboard
![](images/2022-07-14-00-13-34.png)
3. Paste the php info into xdebug wizard field
![](images/2022-07-14-00-34-39.png)
4. Press button below "analyse my phpinfo() output", this will generate the next steps, just follow the steps..
![](images/2022-07-14-00-36-22.png)
5. in the PHP debug plugin this step work to me, copy to clipboard and paste to the php.ini file in the path of your xampp.. should be in the next path for default: c:/xampp/php/php.ini
![](images/2022-07-14-00-38-31.png)
![](images/2022-07-14-00-41-14.png)
6. for last step, go to the configuration from VS code.. file>preferences>settings and type "php validate", then click on settings.json and it will open the file content
![](images/2022-07-14-00-45-52.png)
7. the next property will be empty, put the path to php.exe, for example:
![](images/2022-07-14-00-47-30.png)
9. now, reload Apache from xampp control panel..
10. to create debug file, go to "run and debug" on VS code and create a launch.json file, the file will be created, just close it do not modify it
![](images/2022-07-14-00-51-29.png)