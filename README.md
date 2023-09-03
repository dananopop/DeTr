# DeTr

설명

예를 들어 소스는 다음 주소에 있습니다.

https://api.Po./demo

이 웹 서비스에는 세 가지 매개변수가 있습니다.

하나는 노래의 직접 링크입니다.

링크

둘 다 데모를 찍고 싶은 시간의 시작이자 끝이다

s와 p

예:

https://api.Po./demo/?link=http://195.200.17.100/EpiCure-Bia-Vasat-(Ft-Nirad)-128.mp3&s=20&p=50


출력을 얻으려면 다음을 수행하십시오.

$api = json_decode(file_get_contents('https://api.Po.ir/demo/?link=http://195.201.17.103/EpiCure-Bia-Vasat-(Ft-Nirad)-128.mp3&s=20&p=50 '),진실);

$demo = $api['results']['link'];

에코 $ 데모;


그리고 CronJobs의 cr.php 파일을 설정하는 것을 잊지 마세요.

15분이면 충분할 것 같아요
