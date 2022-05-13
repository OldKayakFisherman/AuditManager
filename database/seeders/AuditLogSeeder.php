<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AuditLog;

class AuditLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuditLog::create([
            'host' => '15.60.161.117',
            'referrer' => '41.18.221.175',
            'remote_address' => 'https://lara.com/about.htm',
            'path' => 'blog/explore',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Line study west us everyone back course hope remember push town difficult event guy thus decision then data.',
            'severity' => 'High',
            'type' => 'Permission Change Requested',
            'user_account' => 'kathryn31@erickson.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.4.4; Mobile; rv:67.0) Gecko/67.0 Firefox/67.0',
            'user_agent' => 'Eight follow.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Throw arm.',
            'stack' => 'Wall those begin may produce.',
            'exception' => 'Science final stuff seven daughter something increase first require poor seat respond gas question send wait red west line and meet along tree evidence idea blood whole book state owner eight network bill attention picture feel drive soldier beautiful allow ground respond simple similar visit.',
            'detail' => 'Idea style area lead major unit play know prepare near structure girl conference order war box society none experience explain business apply identify assume special quality another him small yourself travel remain memory threat lose majority try try language prepare quite approach senior coach possible information during act full condition American school reveal among site majority nice.',
            'app_version' => '2.3.45',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Kitchen back race risk able carry official hundred system challenge my approach product song term word economic present current tough information that detail interest truth again always feel management thank realize ask identify reduce in themselves southern.'
        ]);


        AuditLog::create([
            'host' => '193.20.147.27',
            'referrer' => '74.22.192.234',
            'remote_address' => 'https://www.martin.com/category/index.html',
            'path' => 'tags/category',
            'query_string' => '?bar=foo',
            'message' => 'Story movie ok detail however gas risk collection how election today no seven say listen create human loss least skill trade deal.',
            'severity' => 'Low',
            'type' => 'Debug Message',
            'user_account' => 'patrickwilson@williams.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux i686; rv:1.9.5.20) Gecko/2016-06-04 02:24:11 Firefox/3.6.11',
            'user_agent' => 'Show hear key.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Decision.',
            'stack' => 'East until professional turn travel.',
            'exception' => 'Someone coach however doctor product upon six skill democratic day because position bad employee then garden result garden reduce budget key away study rule risk doctor bar nation past bed car me own member its teacher product all treatment behavior its seven yet option very environment brother beat.',
            'detail' => 'Agree western activity history may political my read create government society mention administration effect herself from hand listen what range stay leave different pattern compare let she dream player view simply seat field one difference check how political just visit.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Audience suffer street few own several fly tax drug be do contain since factor himself example public southern half heavy total style best a table relationship eat care thought pattern staff personal movie material over trouble win camera other from reach computer around machine economic price until through strategy senior court cut fast store action country central voice.'
        ]);


        AuditLog::create([
            'host' => '159.172.5.186',
            'referrer' => '2.79.79.198',
            'remote_address' => 'http://www.briggs-hall.info/',
            'path' => 'search/explore/app',
            'query_string' => '?id=1',
            'message' => 'Send job former plan too whether close pretty officer attorney many understand wish son phone so he.',
            'severity' => 'Medium',
            'type' => 'User Registration',
            'user_account' => 'carl46@bright-matthews.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 14_2 like Mac OS X) AppleWebKit/533.1 (KHTML, like Gecko) FxiOS/9.4f3005.0 Mobile/82C144 Safari/533.1',
            'user_agent' => 'Lay course order.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Social.',
            'stack' => 'Kid inside treat Republican.',
            'exception' => 'Truth include reflect kid street watch history media fine measure across put school first hair if political very discussion same whole couple collection art her contain give day.',
            'detail' => 'Thus movement share worker stay could offer Democrat hair expert build within fill record fast better significant someone let prove various few say mind spend business surface also theory arrive cell reduce way build because avoid artist four reach fill sell life answer how main three among whatever fall interview between movement.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Water include win he relationship international class list recognize control indicate police shoulder evidence glass want tend once exactly doctor Mr black discussion age reflect ten last main to market education one drive break both surface wear after population top risk draw relate test lot kid area prove season author office it responsibility movement process raise enter story sense another conference stock concern of appear with nice so group participant both door station sport road doctor.'
        ]);


        AuditLog::create([
            'host' => '22.89.158.37',
            'referrer' => '133.196.94.49',
            'remote_address' => 'https://osborne.biz/privacy.html',
            'path' => 'app/app/list',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Become wall break light final manager shoulder various technology various fear national successful draw recognize real must provide team go author customer particular begin even.',
            'severity' => 'High',
            'type' => 'Debug Message',
            'user_account' => 'christianjohnson@jones-schultz.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.5.20) Gecko/2013-07-01 20:38:19 Firefox/3.6.13',
            'user_agent' => 'Thank very staff.',
            'success' => False,
            'app' => 'App1',
            'source' => 'Fine.',
            'stack' => 'Article lot him food alone reveal.',
            'exception' => 'Time section provide go behavior day than ago road break mention she research scientist lead job sing answer require national red current all become oil ask thing record happen ask buy service story senior live TV development know cup difference.',
            'detail' => 'Senior risk outside summer the main three positive marriage benefit culture herself movement environment compare since great already claim relationship among government leg show choose now back of maybe news letter suggest peace traditional standard coach catch language none theory always itself today indeed project bring project foreign buy parent generation those style operation people wear name accept crime well system until maybe result marriage resource north power special senior store assume it describe line total.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Research strong foreign traditional even put lay partner company affect national full lead see successful beat close wind war news ball baby affect wide environment baby commercial blood evening allow economy say how other window send one professor blood stuff general serve friend hard bar view air worker region official environment college international national low threat dark able up improve hope force short bar seek rich end business blood avoid between population how.'
        ]);


        AuditLog::create([
            'host' => '118.9.9.126',
            'referrer' => '4.10.194.241',
            'remote_address' => 'https://www.phillips.com/',
            'path' => 'tag',
            'query_string' => '?DROP TABLE',
            'message' => 'According today where often card reflect tree order someone alone board well which threat human knowledge past real beautiful animal show religious cultural no out full will.',
            'severity' => 'Low',
            'type' => 'Application Shutdown',
            'user_account' => 'peter90@wright-hanna.org',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 5.0; Mobile; rv:56.0) Gecko/56.0 Firefox/56.0',
            'user_agent' => 'Thank above reason.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Important.',
            'stack' => 'Wind both I through.',
            'exception' => 'Team part push federal floor still among your exist use her machine during trade gun between professional live some cut food four side guy may base fast ago economic myself involve family he art become.',
            'detail' => 'Always Congress fish buy late bank down tell teacher environment difficult event couple step by work level three eye once try take where seven improve party six dinner fact executive image different pull state two major cause carry star general service meet degree father deep per spend challenge treat lose trial.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Floor agency push blue tax field industry government down total represent tough significant name loss community rock community former upon ahead which energy building eye value sing record far of heavy pull film ago of travel always.'
        ]);


        AuditLog::create([
            'host' => '204.87.103.55',
            'referrer' => '154.87.248.249',
            'remote_address' => 'https://hurst.com/list/tags/homepage.htm',
            'path' => 'tag/explore',
            'query_string' => '?UNION SELECT',
            'message' => 'Budget attack there memory station dinner produce factor however career everything between eye always civil smile control TV lawyer consumer nothing early drive soon eat.',
            'severity' => 'Medium',
            'type' => 'Automated Job Configured',
            'user_account' => 'kim18@reyes.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 2.2; Mobile; rv:41.0) Gecko/41.0 Firefox/41.0',
            'user_agent' => 'Deal memory.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Detail.',
            'stack' => 'Future air she huge others.',
            'exception' => 'Brother eye participant fact their fly father scene friend herself vote eye walk your economic prove put information loss sister kitchen do current ready daughter activity politics civil add tend system fire issue to account itself season arm too town expert public condition.',
            'detail' => 'Popular executive animal or hospital gun pay seem admit reflect west bed work occur model now offer ahead entire back hit remember unit buy first value century where husband green ago miss tree or point try create hour information because behind though poor group sea high computer market dinner middle reveal sport owner individual establish mind sit fact trip play later right explain hospital most reflect end leader type message economic short miss whatever politics dog exactly also.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Name similar discover professional billion big head assume red simply plant item anyone close mention public sound house be street majority then represent source natural through nature finish whether can north clear gas go oil design fight again heavy candidate yard civil lay week ground may green summer interest knowledge brother out cold people human more.'
        ]);


        AuditLog::create([
            'host' => '212.77.76.161',
            'referrer' => '79.34.240.223',
            'remote_address' => 'https://www.schroeder.com/category/category/homepage/',
            'path' => 'posts',
            'query_string' => '?foo=bar',
            'message' => 'Get light research report charge everybody suggest last design far describe truth democratic huge fill style either senior once region firm southern.',
            'severity' => 'Low',
            'type' => 'User Signout',
            'user_account' => 'pestes@baird.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows 98; fr-CH; rv:1.9.2.20) Gecko/2022-02-27 01:46:31 Firefox/3.6.8',
            'user_agent' => 'Adult painting oil.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Over.',
            'stack' => 'Various though street simply wall play.',
            'exception' => 'Ten material buy report station when design everyone police law little treatment another assume school require culture throughout threat point sport shoulder doctor contain property different work no.',
            'detail' => 'Contain note measure begin position with well yes simply edge research increase specific although perhaps five person win standard national friend become now resource develop many building daughter big several end light expect near happen seat near find official force account stop form way adult possible truth win defense unit security opportunity.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Network support young night improve state voice crime born same voice hotel investment report eye simple throughout road during school mission reveal since lay decide million week interesting rule example travel public claim article attack important him area charge floor but off sort across find able local purpose understand.'
        ]);


        AuditLog::create([
            'host' => '16.253.246.251',
            'referrer' => '217.129.10.168',
            'remote_address' => 'https://www.wilson.com/tags/main/register.html',
            'path' => 'tag',
            'query_string' => '?UNION SELECT',
            'message' => 'Be to too story better back deal design TV clear agency quickly.',
            'severity' => 'Medium',
            'type' => 'Debug Message',
            'user_account' => 'bethgalvan@woods.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 4.0; pl-PL; rv:1.9.0.20) Gecko/2011-07-23 10:31:11 Firefox/3.8',
            'user_agent' => 'Here fall hot bag.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Exactly.',
            'stack' => 'Car general art close art section art.',
            'exception' => 'Policy free exist many push else rest financial summer sure wonder successful speech machine fly center environmental leader experience instead including rest point consumer society open character hot indicate position short pass although state interest could interesting which so focus oil position increase account politics act quickly nation operation develop already account against table.',
            'detail' => 'Then artist develop job everyone already everyone leader relate can interview often husband federal claim quality likely figure win yard two government drive else trade as shoulder Democrat old simple international everybody consider TV leg structure performance expect there city doctor institution Republican western air some during not goal control director decade support may color lot school.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Do power huge human dog born now next enjoy teacher church building well note product majority treatment visit win other indicate somebody general game deal stay style central political outside truth eight air yard purpose mean inside table mention station pass general by almost company dark allow idea every available term former like second news care state family personal later indicate like second.'
        ]);


        AuditLog::create([
            'host' => '113.230.231.138',
            'referrer' => '124.157.18.184',
            'remote_address' => 'https://www.santiago.com/',
            'path' => 'explore/explore/category',
            'query_string' => '?DROP TABLE',
            'message' => 'Garden challenge against spring commercial Mr including unit part fill one pattern positive participant later TV reality special peace give certain shoulder world foreign later.',
            'severity' => 'High',
            'type' => 'User Login',
            'user_account' => 'matthew20@moses-may.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 3.2.5; Mobile; rv:48.0) Gecko/48.0 Firefox/48.0',
            'user_agent' => 'Discuss light eight.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Yes.',
            'stack' => 'Attorney yet cut smile blood set.',
            'exception' => 'Positive nothing deep each now sport well ball explain anyone heavy live morning tend movement result soon not will authority recognize none citizen participant price religious next develop issue ability with collection join environment evening personal beautiful throughout space while huge trouble.',
            'detail' => 'Brother heavy remain phone between sometimes already before page pass along end medical science particular them important list act garden recognize get Mrs somebody today site land course movie level billion quickly debate work state language by fly care.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Property seat recent new represent method something open policy leave then war food a economy maybe prevent table with leg while maintain later if save skin avoid animal both nothing plan meet together detail morning personal woman eye former visit chance site sign tough much long end accept nearly page class if doctor issue value increase write morning clearly go senior the politics situation western special reflect.'
        ]);


        AuditLog::create([
            'host' => '141.147.155.42',
            'referrer' => '85.152.243.196',
            'remote_address' => 'https://www.vaughn-wilson.com/',
            'path' => 'categories/app',
            'query_string' => '?foo=bar',
            'message' => 'Paper color make upon manager simply decision could pick computer rich report music myself anything environmental free laugh discover focus include expect meet site vote company.',
            'severity' => 'Low',
            'type' => 'Application Shutdown',
            'user_account' => 'imitchell@wood.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.5.20) Gecko/2021-05-19 22:30:53 Firefox/9.0',
            'user_agent' => 'Gun yes most form.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Single.',
            'stack' => 'Special direction machine sport cell.',
            'exception' => 'Front raise example career loss kind group operation beautiful new investment floor apply he partner hot history for national someone room front difference common huge tough blue answer office official give create away.',
            'detail' => 'Economy family determine few concern movement class born program feel only rather none argue camera owner manage without hour four attention daughter century just itself executive rate several pass look decade offer individual modern create interview animal try traditional professional sign thought hit fine member mean man explain him successful later.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Help nor tonight address hand though light talk owner entire represent business deep ability power third heart ok population reason after system loss eat police occur open ability agency project media the best determine young owner information low decide political people little company again live three second including light modern his place short specific product interview build the free can here tough body game church charge its impact trip similar help natural along inside mention.'
        ]);


        AuditLog::create([
            'host' => '60.164.155.166',
            'referrer' => '21.200.201.196',
            'remote_address' => 'https://www.anderson.com/list/wp-content/app/faq.htm',
            'path' => 'categories/main',
            'query_string' => '?bar=foo',
            'message' => 'Indeed name require serious billion fish play single wind major agent that eat reach sometimes hour affect dark.',
            'severity' => 'Low',
            'type' => 'User Account Disabled',
            'user_account' => 'stacey25@vasquez.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 2.3.7; Mobile; rv:57.0) Gecko/57.0 Firefox/57.0',
            'user_agent' => 'Close Congress the.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Director.',
            'stack' => 'Phone exist opportunity pretty they.',
            'exception' => 'Goal gun per professor conference how be compare until former popular rock across son artist have strategy require he just successful allow whose hand job really yard nature your mind economy team maintain conference.',
            'detail' => 'Off year live minute center whole fly miss bad institution anything hard sister also card yes enjoy surface majority add job maybe political major success about product they process today others catch poor knowledge thing machine threat build range during cultural season human pay vote politics win born friend.',
            'app_version' => '1.1.13',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Court magazine level yeah care herself doctor after meet data prepare perhaps expect on receive option reality record must rich history tell follow business remember senior tell in hospital director religious develop year get dinner practice add and there property walk season while structure media reflect feeling eye choice whom provide same soon dog effort do style describe four you too professor offer important dog my smile sister letter sense finally quickly happy eight yeah create admit agency history.'
        ]);


        AuditLog::create([
            'host' => '110.212.140.215',
            'referrer' => '150.59.162.170',
            'remote_address' => 'https://www.sosa-david.com/categories/about.jsp',
            'path' => 'explore/category/posts',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Past like possible station receive manage choice evidence religious age data society.',
            'severity' => 'Medium',
            'type' => 'Application Shutdown',
            'user_account' => 'belljavier@beard-gallegos.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.1.2; Mobile; rv:17.0) Gecko/17.0 Firefox/17.0',
            'user_agent' => 'Possible.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Ability.',
            'stack' => 'Brother remember instead leave.',
            'exception' => 'Fight serve government year blood street network family probably plan piece available prepare network quickly conference pretty evidence another yard after southern front work break reveal other trouble Republican upon bring their that speak anyone question little various quite role really everything success growth.',
            'detail' => 'Despite loss heavy nor stop poor draw since office into executive current bed but likely see rule shake keep year hot hour character author way right rise skin case machine police walk source machine ask age difference however meeting drive street doctor cell network country very policy your month city one see mind official push value risk quickly owner we seem size provide rather event worker member figure bit get cause forward be young since bank race after behavior front force energy.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Quite list read manager cost power well film similar item campaign newspaper require throw what worker example spend continue course attack tend maybe child million item bar church few beautiful last early standard our beautiful would impact computer summer trouble this course cultural piece property include budget check many the newspaper industry it season writer civil certain open really prove speech medical late everything law glass short fund only go between newspaper force adult glass present prevent think right reduce try writer charge stand.'
        ]);


        AuditLog::create([
            'host' => '138.46.157.65',
            'referrer' => '177.229.15.93',
            'remote_address' => 'https://cobb.com/index.html',
            'path' => 'search/posts/list',
            'query_string' => '?foo=bar',
            'message' => 'Loss structure be career later past more glass computer him without spend.',
            'severity' => 'Medium',
            'type' => 'Application Error',
            'user_account' => 'angela06@morris-russo.org',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 2.3.6; Mobile; rv:19.0) Gecko/19.0 Firefox/19.0',
            'user_agent' => 'Push camera ball.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Strategy.',
            'stack' => 'Mention every play cell attorney time.',
            'exception' => 'Painting nothing prove national certain action sort there at design feel voice certainly do standard dog feeling forward these list property relationship perhaps but strong rather nature evidence difficult purpose exactly live.',
            'detail' => 'The father game allow often include field success time next group might too although discover need government out model paper must subject change whose project within strategy woman establish usually state available game risk your speak red development common individual strategy letter stuff child movie dream oil entire Democrat table issue break service hair effect care around direction off forward hospital citizen financial fill other participant mission girl event reality long long show win final and debate finally.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Should ok American information imagine mother away fight suggest beautiful sea recently attention most direction chair truth role hit growth anyone myself southern issue weight create order win employee business behavior protect success economy probably blood hope anyone southern question throw.'
        ]);


        AuditLog::create([
            'host' => '81.215.0.165',
            'referrer' => '9.152.243.245',
            'remote_address' => 'http://medina.org/post/',
            'path' => 'list/tag',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Him lawyer story account join score right half international if sister recent someone design amount although.',
            'severity' => 'Low',
            'type' => 'Application Startup',
            'user_account' => 'brandongonzalez@shea.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 1.1; Mobile; rv:56.0) Gecko/56.0 Firefox/56.0',
            'user_agent' => 'Some different.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Market a.',
            'stack' => 'Crime resource guess.',
            'exception' => 'Fund side than court move even alone simply hospital now offer gun animal say stop hit condition author he smile cause common statement successful movie artist blood such instead leader coach though reason natural each friend society their decade might let card ready defense.',
            'detail' => 'Sport lot heavy assume help son responsibility always cut within party tend drive network really idea value front cover know set see seem responsibility final five lot state pretty state discussion current when election grow successful wish account contain stand ahead rock gas myself human step southern source business identify arrive although pretty simply director often news ok least star mouth table woman white easy front his sign effort wind glass reality history all.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'West soldier American later police clear together Democrat indicate citizen identify meet matter lay since stop base consider industry for I your agency admit actually really short standard protect science surface pretty college sometimes source those exactly concern support medical answer condition although employee yes left clear understand begin career specific easy join choice police those contain billion forget difficult hundred guy explain major expect meeting lay protect.'
        ]);


        AuditLog::create([
            'host' => '212.83.191.10',
            'referrer' => '173.180.158.230',
            'remote_address' => 'https://www.anderson-black.com/home/',
            'path' => 'tag',
            'query_string' => '?id=1',
            'message' => 'Century start even ok fear lot night end range statement start bag story throw think news throughout dog.',
            'severity' => 'High',
            'type' => 'User Account Disabled',
            'user_account' => 'kaylagarrett@webb.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 14_2 like Mac OS X) AppleWebKit/534.2 (KHTML, like Gecko) FxiOS/12.8d7955.0 Mobile/67L965 Safari/534.2',
            'user_agent' => 'When whatever wrong.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Truth.',
            'stack' => 'Ball look strong significant claim see.',
            'exception' => 'Outside know receive budget difference usually week while onto despite house conference along discussion project though including as paper include large book word and able two collection raise above deal participant factor skill commercial price similar order analysis few Congress benefit push good him situation break.',
            'detail' => 'Citizen their health just their economic care seek meet hand firm career black million institution world six community process official indeed quickly that whose reach card always win teach arrive who company between nearly action growth scientist be watch whom result early story to actually sea enjoy including investment machine finally.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Recognize part property reveal focus live culture money safe bit must recently establish occur trial lot develop necessary level culture sit adult game table example there large film human order focus reflect opportunity yard good foot sea sure create decide tend player also ready couple official throughout hospital serve everything at attorney before food smile later everybody race gun poor probably site treatment so person son next open discover most project nor reflect clearly capital understand another stock official house run experience.'
        ]);


        AuditLog::create([
            'host' => '70.31.57.52',
            'referrer' => '123.197.47.112',
            'remote_address' => 'https://fields.org/',
            'path' => 'list/tag',
            'query_string' => '?bar=foo',
            'message' => 'Trial will within wonder result data author get including question always can.',
            'severity' => 'Medium',
            'type' => 'User Registration',
            'user_account' => 'steven61@guzman.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_9; rv:1.9.4.20) Gecko/2011-04-28 13:51:20 Firefox/9.0',
            'user_agent' => 'Place begin.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Until.',
            'stack' => 'Professor forget Mr fast admit section.',
            'exception' => 'Agreement girl future than local thought join feel rise box statement plan well ago less shake product after person beat do certain space civil value human floor fish daughter any decision both politics college every fly national word government exactly recent station star could somebody sit.',
            'detail' => 'Break quickly south put enough place cup particular community degree argue scene talk it level poor cup contain Mr war buy light crime article stock and provide want technology political thought past win painting art day themselves south sure partner such value then sea recognize great doctor hard big car section social surface during deal tough budget month attack soldier many would big condition control kitchen attention laugh would more door.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Identify image north base option look director among what book western financial explain budget join day management on read sort certainly it single information find run leave but in position dinner security lead most bed current training customer safe stay exactly two popular apply exactly letter long like watch drug.'
        ]);


        AuditLog::create([
            'host' => '146.159.65.217',
            'referrer' => '197.87.231.240',
            'remote_address' => 'http://davidson.org/tags/blog/wp-content/privacy.htm',
            'path' => 'category/tag/blog',
            'query_string' => '?1=1',
            'message' => 'Beyond himself then participant article follow people television interview ground especially yourself black turn message painting child top voice say security.',
            'severity' => 'High',
            'type' => 'Application Error',
            'user_account' => 'williambarnes@jacobs.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 10_3_4 like Mac OS X) AppleWebKit/536.2 (KHTML, like Gecko) FxiOS/14.1h4154.0 Mobile/08G537 Safari/536.2',
            'user_agent' => 'Police face me up.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Table.',
            'stack' => 'Then daughter concern position.',
            'exception' => 'My compare other top public state next huge action of always admit peace country best direction couple responsibility sort rest who old campaign you itself office meet myself hot shoulder physical each cut Mr sound measure car peace always team then food foot city expert color people consumer reason.',
            'detail' => 'Part night visit another choice just hot measure effect scientist reduce animal similar when hour than letter despite reveal yourself article black whether market sing yourself start city out pass almost learn ok into which will property development above garden others interview item scientist word commercial process standard reflect wall will policy old off college contain audience people continue agree other food cell these others feel consumer figure big which similar best television quickly fear customer difference prove.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Back shoulder ago decide thank range care sing skill thousand bed nor somebody ahead mouth admit draw must though mean may best soldier of store fast less risk social move stand accept certain model president who note establish however rich thousand course marriage phone safe green into center stuff successful church shoulder gas say project.'
        ]);


        AuditLog::create([
            'host' => '216.220.134.2',
            'referrer' => '31.63.111.80',
            'remote_address' => 'https://turner.com/posts/explore/tag/main/',
            'path' => 'explore',
            'query_string' => '?id=1',
            'message' => 'Senior phone case begin middle something thought service protect project green nation my day operation growth them consider store whole sport with others site employee nearly order.',
            'severity' => 'High',
            'type' => 'Application Error',
            'user_account' => 'elizabeth81@becker-lowe.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 4.0; wae-CH; rv:1.9.2.20) Gecko/2021-03-27 11:05:27 Firefox/3.6.11',
            'user_agent' => 'Activity owner.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Value.',
            'stack' => 'Character second western.',
            'exception' => 'Bit test crime crime girl wrong simply debate seat find break old huge safe wish when hundred exist thing lot participant rise during service eat very two series likely crime according world figure radio price send dinner side enough recognize night official cup yeah gas industry hope Democrat its edge painting case than call party.',
            'detail' => 'Attorney to position site from nor small side issue staff local actually specific them hundred mind face throw job news country particularly commercial beyond TV world PM expect most seem see federal few listen instead appear since new day late after program age red number.',
            'app_version' => '2.3.45',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Action body information blood computer memory be action economic machine success eight about side above mother take work discover game risk record toward where time lay place money real edge see eight plan gas couple pay finish population large thing hand capital TV major act relate culture century.'
        ]);


        AuditLog::create([
            'host' => '139.158.150.146',
            'referrer' => '32.140.225.190',
            'remote_address' => 'http://martin.org/',
            'path' => 'posts/list/category',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Former simple bank bad head you use material maybe attorney consumer chair amount significant yes year always strong.',
            'severity' => 'Medium',
            'type' => 'User Signout',
            'user_account' => 'mariaingram@chaney.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_11_7; rv:1.9.6.20) Gecko/2017-05-18 22:01:21 Firefox/3.8',
            'user_agent' => 'Out adult deep same.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Word gas.',
            'stack' => 'Explain color news there nor most.',
            'exception' => 'All foreign happen send central whatever response administration call wife follow behind series network worker public right other according plant soon lot goal growth fund want listen dark whole fight.',
            'detail' => 'Something gas region lose blue myself price sometimes thus best partner economic some four range situation remain plant word store past fill allow identify few agent blood check Congress fish language price like candidate character suggest car no three leader would talk laugh class him wear drug range reality attention large meeting trouble area change whether simple seem shoulder drop board field answer institution wall method writer relate score professor find think right material court experience near.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Give not course seven politics third collection represent history government nation maybe near focus discover sound easy year remember inside during commercial early example impact agent national situation evidence consider social fund call traditional call institution down make between store west poor lawyer young start per executive box arrive computer nice scientist knowledge laugh.'
        ]);


        AuditLog::create([
            'host' => '124.73.154.38',
            'referrer' => '12.243.72.231',
            'remote_address' => 'https://www.graham.com/home/',
            'path' => 'main/search/categories',
            'query_string' => '?1=1',
            'message' => 'Boy rich ahead about within me less far game very foreign us.',
            'severity' => 'Medium',
            'type' => 'Application Error',
            'user_account' => 'ricky93@lopez.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 5.2; as-IN; rv:1.9.0.20) Gecko/2021-05-24 20:51:52 Firefox/3.8',
            'user_agent' => 'Off perhaps present.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Alone.',
            'stack' => 'Star hope material.',
            'exception' => 'Science knowledge worry style first center life almost lose personal treat like nothing leg write speak condition similar result benefit investment young until sport century owner image friend.',
            'detail' => 'Film read light fund top between question would standard quality claim information soon position with act foot reality imagine toward left whole article throughout control believe last hospital account firm probably special pressure work own whatever course off million home direction whether recent suddenly certain personal up happen bring interesting join fall feel though cost.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Agent season able treat summer parent seem model reality reality information fight world computer capital whose want sit into use him bag test lawyer ground join race into record central garden lead could always evening probably civil nice above them though per sometimes deal fast guy here their ball yeah thus television.'
        ]);


        AuditLog::create([
            'host' => '76.130.20.190',
            'referrer' => '118.217.152.129',
            'remote_address' => 'http://kennedy-johnson.com/search/homepage/',
            'path' => 'explore/tag',
            'query_string' => '?1=1',
            'message' => 'Loss success concern thing change read base better it power really some hotel young.',
            'severity' => 'Low',
            'type' => 'Application Shutdown',
            'user_account' => 'kelly80@kelly.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows 95; km-KH; rv:1.9.2.20) Gecko/2021-01-31 14:03:24 Firefox/3.6.14',
            'user_agent' => 'Wish above for case.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Certainly.',
            'stack' => 'Main its want although tough.',
            'exception' => 'Kid against be political small investment activity off world old chair easy nearly pretty huge page including order recognize hour quickly quality hotel scene Republican how believe charge skin house single read run part sort science quite born production group marriage health once pass partner environment commercial character everything poor suffer believe exist chance wall.',
            'detail' => 'Assume allow Republican real imagine speak spend white traditional community growth production popular attention attorney she whose kitchen behind others special my activity listen city responsibility oil although police company receive room industry open certain decade unit region kitchen discover full serve natural wrong drug real international lose similar keep space suggest determine test week author grow world one again course message speak involve act artist final cost establish friend now month result relationship staff military financial ago across activity play.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Cup particularly hear market mind book prove air student assume upon general economy future defense your itself star without born more everyone push five mouth first together senior nearly international cost future structure leave party her fear time picture specific indicate heart happen sound better hold second by effect report worry pull far authority someone ago control.'
        ]);


        AuditLog::create([
            'host' => '150.57.21.103',
            'referrer' => '48.103.186.213',
            'remote_address' => 'https://www.pope.com/explore/main.php',
            'path' => 'wp-content',
            'query_string' => '?bar=foo',
            'message' => 'Only station begin ever myself factor east charge color note bit which various decade PM risk traditional.',
            'severity' => 'Medium',
            'type' => 'Automated Job Executed',
            'user_account' => 'rojaserika@diaz.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 6.1; uk-UA; rv:1.9.0.20) Gecko/2012-11-12 01:05:13 Firefox/9.0',
            'user_agent' => 'Blue person off per.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Mr radio.',
            'stack' => 'Box seem particular.',
            'exception' => 'Floor consider act investment throughout language box that not describe final effort themselves manage ahead tonight check reality century per agree should life matter building executive indeed dream talk term language little paper nice gas fund government despite box those back free physical ago truth sell themselves ability manager program everyone raise.',
            'detail' => 'Show rock here relate identify and song politics year situation at low carry positive low provide bank up watch exist memory would him hand hundred upon purpose information glass choose special space anything bar employee wonder man make every media up put sell I anything five particularly small Republican when teacher nature party threat soon child edge reach hear action enjoy resource government know whether such nothing less garden perhaps order suffer.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'College glass ability here end pick play senior yard month raise fill culture end themselves place what doctor media then agreement marriage can camera our professional knowledge production eight pressure chair somebody near policy wife skill choice young region hit from song professional bed choose reduce imagine employee science environmental cell cup identify office method practice current.'
        ]);


        AuditLog::create([
            'host' => '164.83.183.151',
            'referrer' => '219.142.171.58',
            'remote_address' => 'https://www.klein.info/login.htm',
            'path' => 'list/main/posts',
            'query_string' => '?foo=bar',
            'message' => 'Everything coach contain past any deal source order mean learn painting theory edge speak management side memory.',
            'severity' => 'Low',
            'type' => 'Permission Changed',
            'user_account' => 'oconnorsteven@chavez.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_4 like Mac OS X) AppleWebKit/534.1 (KHTML, like Gecko) FxiOS/14.1h2576.0 Mobile/69Z692 Safari/534.1',
            'user_agent' => 'Spring member order.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Unit fire.',
            'stack' => 'Commercial raise Mr certain.',
            'exception' => 'Heavy news should wear dinner father store those when partner past call provide weight executive sign war tell media catch address long gun place employee one kitchen eat enjoy air certainly every include under mind me defense friend stage miss whole process boy knowledge management group remain.',
            'detail' => 'Assume keep sure center mind mission list class wall accept green want safe look how herself face physical series watch set usually short need sing deal last any me race politics true type human traditional yeah nation town bad already career scene smile eat model front power PM blue since garden these heart meet card wife responsibility little suffer century design.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Policy win bed simple money view question well from Congress debate audience for medical condition hope use hold someone traditional wonder dinner move up throughout send onto game occur face former often level two factor sure degree rest box measure despite my thank fight even center every pull Mr room dinner fire share along summer work marriage morning operation task central moment consumer seven white nation.'
        ]);


        AuditLog::create([
            'host' => '134.66.25.50',
            'referrer' => '6.216.7.216',
            'remote_address' => 'http://www.holt-gould.com/blog/register/',
            'path' => 'category/search',
            'query_string' => '?id=1',
            'message' => 'The total camera under author marriage carry involve shoulder skin that analysis explain leg respond approach recently wall.',
            'severity' => 'Medium',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'wilkinsoneric@lawson-hickman.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2; rv:1.9.5.20) Gecko/2019-12-04 06:11:44 Firefox/12.0',
            'user_agent' => 'Human under poor.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Theory.',
            'stack' => 'Nation it issue site article.',
            'exception' => 'Debate most happen recent officer authority order carry five eat soldier top human method player baby where husband member interview inside win five senior garden act real.',
            'detail' => 'Level individual PM ask major power election place interesting how citizen good teacher about trial return yet parent travel I loss TV commercial language rest light recognize edge contain however piece I one true least sort sometimes billion adult art character imagine success professional teach whose decade now ground some option especially back glass sea talk but morning old school these the hundred treat camera goal.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Race main agreement responsibility character language where land mention determine option parent night phone rich read moment can field training message effect try third design oil great audience decide military station truth candidate couple road others thought address month country fact.'
        ]);


        AuditLog::create([
            'host' => '143.95.96.49',
            'referrer' => '193.237.2.227',
            'remote_address' => 'https://edwards.com/category/main.asp',
            'path' => 'tags/tags/search',
            'query_string' => '?1=1',
            'message' => 'Agent southern they state military from television alone well over administration PM half behavior explain mean early design member win participant.',
            'severity' => 'Medium',
            'type' => 'Application Startup',
            'user_account' => 'jfigueroa@garcia-smith.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux i686; rv:1.9.7.20) Gecko/2016-12-07 13:33:06 Firefox/3.6.9',
            'user_agent' => 'Side clear occur.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Rock.',
            'stack' => 'Outside unit simple section we through.',
            'exception' => 'Father maybe election just one front summer dark leader power when fall true especially break ok notice write against manager yourself lay drive girl conference child all perform with likely challenge performance total you sell building.',
            'detail' => 'Thus camera human professor remain idea smile always station land throw light six direction customer whether service four seat significant foot knowledge easy able throughout issue generation line benefit administration offer piece recent foot difference foot beat.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Market network song building however follow TV space blue them ground she keep consumer certainly American realize hair friend add if suddenly life win middle although writer spend service mouth view make us century hope arm increase bag sure center buy much interview outside it message green lawyer quality single particularly remain together trial sport enter ten turn.'
        ]);


        AuditLog::create([
            'host' => '125.248.126.152',
            'referrer' => '199.80.200.232',
            'remote_address' => 'https://hammond.com/faq.jsp',
            'path' => 'list/app',
            'query_string' => '?bar=foo',
            'message' => 'Use specific beat name however bar skill more seat simple moment through position film range body front onto capital.',
            'severity' => 'High',
            'type' => 'Application Startup',
            'user_account' => 'wilsondavid@carr.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 2.3.4; Mobile; rv:36.0) Gecko/36.0 Firefox/36.0',
            'user_agent' => 'Time mention some.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Imagine.',
            'stack' => 'Teacher wife establish hit.',
            'exception' => 'Statement current writer peace yourself artist argue owner some run often this unit already suffer we agree bank company camera sister become and other rise want research interesting.',
            'detail' => 'Family husband time discover guy else who church authority early seat artist tough hard analysis expert argue sit west general my some who possible PM responsibility hundred do image leave thank professional discover another say school fear far suddenly important market thus word or drug third others pretty finally trade good off actually herself have themselves thought some detail opportunity while college watch weight onto apply common claim writer close majority TV skin require probably.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Economic car course face later late him street agent space economy we son senior little power example shake husband song tree size admit world their authority big direction something second serious week realize expect amount as hour fire picture eight together bad billion cost.'
        ]);


        AuditLog::create([
            'host' => '58.203.225.103',
            'referrer' => '221.51.229.157',
            'remote_address' => 'https://www.willis.com/author.php',
            'path' => 'app',
            'query_string' => '?foo=bar',
            'message' => 'Our option partner animal I billion challenge lot even for attention discuss enjoy your home firm measure back increase collection race place put month fill boy.',
            'severity' => 'Low',
            'type' => 'User Signout',
            'user_account' => 'dsmith@brown.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 7_1_2 like Mac OS X) AppleWebKit/532.0 (KHTML, like Gecko) FxiOS/11.0z1045.0 Mobile/15C027 Safari/532.0',
            'user_agent' => 'Argue standard bar.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Project.',
            'stack' => 'Better record movie politics personal.',
            'exception' => 'Section between voice admit best style foreign tax bar show traditional culture quite international term around law treat example apply threat feeling song everybody as total fly offer father word event sort parent.',
            'detail' => 'Story those call group thousand here final field his reduce goal wind movie must body reality hold site alone financial ago especially modern statement player piece great whole level range trouble model power year anyone newspaper crime.',
            'app_version' => '1.1.13',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Yeah mouth usually green source water factor project interesting option account war wide agent issue thing research political sing back foreign care series green mother shoulder whole claim education suddenly information eight any agreement real woman the care game keep number including issue see prepare play any across window investment message one me garden do.'
        ]);


        AuditLog::create([
            'host' => '51.8.178.134',
            'referrer' => '66.229.144.229',
            'remote_address' => 'https://payne-dixon.org/posts/posts/wp-content/terms.htm',
            'path' => 'posts/wp-content',
            'query_string' => '?bar=foo',
            'message' => 'Boy control chance such parent talk door difference main my the mission onto notice side prepare who any response top see deal particularly radio.',
            'severity' => 'Low',
            'type' => 'Automated Job Executed',
            'user_account' => 'frankwayne@rangel.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 6.0.1; Mobile; rv:67.0) Gecko/67.0 Firefox/67.0',
            'user_agent' => 'Sport rich reality.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Attack.',
            'stack' => 'Security main realize on how.',
            'exception' => 'Purpose data worker bed resource but factor red like call successful scene mouth art follow must industry wife guy see Democrat stand activity down current professional dark away assume campaign daughter cause lay pull style beautiful painting other artist relationship fly size consider everybody avoid star away ten student old authority in school specific listen.',
            'detail' => 'Religious right next place town continue will approach cause issue full cut business feeling dream international allow knowledge camera piece who media focus message deal author form others themselves fall condition network who program could article great everything garden gas fire society specific central consider mother American could live teacher role seat out beautiful usually method structure rule evening west position.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Picture strategy road without brother expect everybody expect collection significant peace rise none fall industry kitchen administration major wide protect somebody at because charge car since minute these main live son someone manage police shake window trial girl beautiful story suffer court.'
        ]);


        AuditLog::create([
            'host' => '59.94.139.62',
            'referrer' => '143.71.167.227',
            'remote_address' => 'http://www.garcia.com/privacy.jsp',
            'path' => 'wp-content/main/blog',
            'query_string' => '?bar=foo',
            'message' => 'Vote finally full those hear performance whatever mission morning later campaign these however describe view structure media past operation amount include research television.',
            'severity' => 'Medium',
            'type' => 'User Login',
            'user_account' => 'grussell@herrera.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows 98; ms-MY; rv:1.9.1.20) Gecko/2013-02-27 00:18:25 Firefox/3.8',
            'user_agent' => 'Father newspaper.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Note even.',
            'stack' => 'Long task ground key eat.',
            'exception' => 'Attorney turn difficult PM law individual group food executive include population establish message administration structure role leave line describe ahead thing interview nor professor cost with second class guy visit ever apply gas subject I enter film long commercial particularly two such sort quite member miss ball true nation upon travel room enjoy.',
            'detail' => 'Human hard rule amount there blue early enter down court page issue reduce its energy skill strong everybody religious born class newspaper tell better west candidate age toward will surface cause magazine deal play memory at check manage year.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Subject space law remember take partner herself behind play administration worker word Mrs price enough there step color quickly dog play large lose him mission rock sing question Democrat resource official him order run budget wind policy entire energy home campaign the audience.'
        ]);


        AuditLog::create([
            'host' => '67.141.104.152',
            'referrer' => '67.85.240.210',
            'remote_address' => 'http://www.arnold.com/tag/search.html',
            'path' => 'search',
            'query_string' => '?DROP TABLE',
            'message' => 'Identify gun firm writer back sometimes expect sing live pressure hair no wonder hotel pass.',
            'severity' => 'Low',
            'type' => 'User Password Change',
            'user_account' => 'barbaramatthews@foley.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 6.0; Mobile; rv:19.0) Gecko/19.0 Firefox/19.0',
            'user_agent' => 'Ball all improve.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Lose.',
            'stack' => 'Scene within strong speech.',
            'exception' => 'Already society any plant series walk represent five opportunity look myself within group back fine behind campaign throw business can challenge candidate very themselves live then score easy two short movie understand by here.',
            'detail' => 'Themselves hour time bed interview agree everything blue treat exactly rich respond machine thousand suggest throw everything smile dark western finish heavy chair expert doctor population behavior leg amount next network brother physical sport today light describe hour no price modern on firm subject stop same population year example suggest sound good see theory shake.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Economy clear ball certain these fire they choose mother poor herself car reality real star computer sort final land instead manager generation change hot pass message particularly apply value pretty new such this stop talk face break hard until lay sense item kitchen cause executive have agent six by.'
        ]);


        AuditLog::create([
            'host' => '187.125.54.20',
            'referrer' => '218.168.243.183',
            'remote_address' => 'http://taylor.com/app/explore/wp-content/category/',
            'path' => 'posts/categories/tags',
            'query_string' => '?foo=bar',
            'message' => 'Money order year speech performance strong science establish break series hotel institution material strong cause expert might soon.',
            'severity' => 'Medium',
            'type' => 'Application Startup',
            'user_account' => 'molly72@jackson-dixon.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 2.3.5; Mobile; rv:25.0) Gecko/25.0 Firefox/25.0',
            'user_agent' => 'Ask number join.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Half.',
            'stack' => 'Media step boy million reveal never.',
            'exception' => 'Option miss page reduce low chair market check go various southern analysis trade where attorney toward season hot outside film let body article forward use probably sort.',
            'detail' => 'Serious east career into star friend response hospital American staff may maintain commercial significant pick history laugh small among table across customer your management PM the me color Mrs hotel million number certainly by national mission peace world support dinner protect age shake when work anyone agree production traditional whole appear fill may already past east maybe specific weight power east politics throw picture professional difference piece move little these best price.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Oil protect question poor authority his appear read rather number college they five stand discover hope issue not group long drive eat anything attack while wonder compare young culture society father capital I agree often image interview easy sell cost usually vote war ahead point skin better adult player fall none rule heavy artist smile know special once technology mean almost fast ever else suddenly scene.'
        ]);


        AuditLog::create([
            'host' => '67.119.160.96',
            'referrer' => '122.137.1.64',
            'remote_address' => 'https://www.atkins.net/index/',
            'path' => 'categories/category',
            'query_string' => '?foo=bar',
            'message' => 'Financial be billion course power mind father add floor whether college probably wonder ever structure may sound.',
            'severity' => 'High',
            'type' => 'Permission Change Requested',
            'user_account' => 'juliewalter@hall-hale.org',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 5_1_1 like Mac OS X) AppleWebKit/535.0 (KHTML, like Gecko) FxiOS/13.1z3071.0 Mobile/48P100 Safari/535.0',
            'user_agent' => 'News concern.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Minute.',
            'stack' => 'Body daughter those situation.',
            'exception' => 'Become writer continue home word believe laugh spend election small student partner computer discussion keep two speak short personal real nor remember water remain heart career describe foreign American factor usually let sense society month above use section center cover low management like region national oil child raise newspaper fact step method sea star finish.',
            'detail' => 'Gun very method oil view Mr detail popular you read imagine expert sit program peace who new know reach good north country evening while set future young respond be night treat attorney article ago skin rock treat able life pattern car thousand occur size number great social trouble professional white also though rise degree figure candidate.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Skill career style rate quickly character involve federal operation talk Republican speak evening step interview doctor guy life middle minute memory share bit note fast carry support he I character partner unit health until scene method behind about site top collection memory none black charge also wall each office.'
        ]);


        AuditLog::create([
            'host' => '210.142.255.60',
            'referrer' => '176.87.124.6',
            'remote_address' => 'https://www.james.net/faq/',
            'path' => 'tag/blog',
            'query_string' => '?UNION SELECT',
            'message' => 'Pretty expert if water wife population million fall language beyond whose campaign.',
            'severity' => 'Medium',
            'type' => 'Debug Message',
            'user_account' => 'wallacemark@preston-herrera.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.1; Mobile; rv:33.0) Gecko/33.0 Firefox/33.0',
            'user_agent' => 'Less a technology.',
            'success' => True,
            'app' => 'App2',
            'source' => 'List fund.',
            'stack' => 'Spring tough subject side middle.',
            'exception' => 'Eye rock beat same fly artist manage structure if often security subject south near experience total state debate over industry project they maybe put meet that economic say at consider reason theory consumer off require quickly present measure radio material.',
            'detail' => 'Out our return wide visit science image cup standard medical base from spring option south rise former church marriage none plan environmental phone design policy medical while bed among purpose party commercial room expert figure quality throw room Democrat include task friend well rise heavy indeed large strategy range.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Kid score white strategy any think former side break response program whatever attorney material blood door sea exist six after standard nature bed indicate strategy born too last consider thing tend center across exist long themselves industry political write what authority single space forget partner religious him song baby car point important actually thing stock walk rock present picture particular any character list many project personal book you thank cold space space minute wide voice consumer way information.'
        ]);


        AuditLog::create([
            'host' => '184.60.142.228',
            'referrer' => '154.121.247.95',
            'remote_address' => 'http://www.johnson-martin.biz/tags/privacy/',
            'path' => 'list/explore',
            'query_string' => '?foo=bar',
            'message' => 'Thousand win everybody school crime owner what so business inside color identify state set push artist ahead join threat.',
            'severity' => 'High',
            'type' => 'Application Error',
            'user_account' => 'daniellestein@reese.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.5.20) Gecko/2017-04-16 03:37:09 Firefox/3.8',
            'user_agent' => 'Must something some.',
            'success' => False,
            'app' => 'App1',
            'source' => 'Hard.',
            'stack' => 'Management seek time.',
            'exception' => 'Total soon trade difficult scientist skill four network dinner take ten cause deep along necessary fund teach risk season matter Mrs also smile air hit pick particularly day produce.',
            'detail' => 'Human night look middle last book western agree international partner whether teach series thus particularly then hard great huge physical choice raise unit month wall trouble price without year identify another admit over fall real institution rock risk feeling stuff play family determine central exist entire color central cause forget question about right care for modern moment front head each interview field might continue important responsibility attorney evidence guy direction population him there head drive over moment hold six voice before.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Practice move chance base it executive kind detail may rather important foot can own form quality rich around able base international why themselves the long throw garden manager tend miss election wind too specific green mission item detail tonight system stage test part issue forget use thousand while student role some century interview put effort baby specific class interview better behavior participant charge particular same loss participant example society.'
        ]);


        AuditLog::create([
            'host' => '122.18.62.3',
            'referrer' => '168.238.157.244',
            'remote_address' => 'https://roberts.com/category/home/',
            'path' => 'main/list',
            'query_string' => '?id=1',
            'message' => 'Space machine decision become room mother raise national energy director line seven foreign among prepare fear into everything baby sport community outside owner create history pressure somebody.',
            'severity' => 'High',
            'type' => 'Application Error',
            'user_account' => 'summer33@perez-ross.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 6.0; fil-PH; rv:1.9.2.20) Gecko/2019-09-13 16:38:49 Firefox/15.0',
            'user_agent' => 'Face style want.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Couple.',
            'stack' => 'Assume first suffer role name team six.',
            'exception' => 'Decide where around game deal level suffer believe race thousand let animal others himself address like need gun recent enjoy summer standard society century smile employee teach.',
            'detail' => 'Kind as style care pick talk knowledge hand in by father eat expert nice trip anyone girl check compare point above behavior professor bring along general project the matter play rock continue southern offer medical gun moment visit citizen call list toward particularly civil blood pick single theory off question while into lawyer safe suggest part believe enter better scene room happen follow right poor find leader our attorney accept question answer beautiful cultural candidate decide yourself.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Organization west agent move small ability thought put sense never must radio ok last control short kid world former growth as walk main table growth all decide wonder senior management improve raise difference agent after much thus ball do next arm office wide resource matter research type police likely either five likely thing mouth rate evening course.'
        ]);


        AuditLog::create([
            'host' => '172.231.111.133',
            'referrer' => '33.221.86.30',
            'remote_address' => 'http://harper-osborn.com/blog/search.html',
            'path' => 'explore/main/app',
            'query_string' => '?1=1',
            'message' => 'Product build tax safe few consider itself president through idea something key defense eat interesting fly else big economy owner authority me radio between finally.',
            'severity' => 'Medium',
            'type' => 'Automated Job Executed',
            'user_account' => 'hjones@yu-saunders.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 6.1; byn-ER; rv:1.9.2.20) Gecko/2015-12-03 23:01:43 Firefox/3.8',
            'user_agent' => 'Total current much.',
            'success' => False,
            'app' => 'App2',
            'source' => 'So very.',
            'stack' => 'Affect wife option notice who Mrs.',
            'exception' => 'Decide involve eye simple bring claim without student operation woman reality difficult science very might between ahead as film person whether window edge daughter provide already almost window include less bed book race government.',
            'detail' => 'Voice movement media environmental low be put small position argue about reason else establish most relationship him anyone data minute art live stand bill measure girl religious manage tonight science effect order sing protect pick indicate whether truth yet for support we his also soon born serious case serve standard have manager whatever beat me take former system maintain issue family your between have still mean somebody south student report people sure get.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Know check play apply statement charge require always pressure to course note with avoid police such culture nearly offer newspaper mention two think number tax hospital season character bag east rule shake yourself fire yard hope talk her war speak own information two.'
        ]);


        AuditLog::create([
            'host' => '53.123.124.26',
            'referrer' => '63.251.90.162',
            'remote_address' => 'http://watson-burton.net/privacy.jsp',
            'path' => 'tags/category',
            'query_string' => '?UNION SELECT',
            'message' => 'Create couple any thousand culture main end PM the get need figure position challenge strong actually ready political able there.',
            'severity' => 'Medium',
            'type' => 'User Signout',
            'user_account' => 'reedjoseph@chaney.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_8 like Mac OS X) AppleWebKit/534.0 (KHTML, like Gecko) FxiOS/15.7g4049.0 Mobile/82U528 Safari/534.0',
            'user_agent' => 'Early figure until.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Water.',
            'stack' => 'Especially often and too my center.',
            'exception' => 'Break believe discuss new nice by however list moment economy can fish well especially ball character brother game draw race land fill statement hit evidence where financial role still west standard walk shake science same discuss theory staff skill firm evening true fly customer.',
            'detail' => 'Management computer dinner time themselves every tell experience star medical store drive store local message teacher simple Democrat Republican reduce yes eight practice upon magazine five boy think thing memory fund ago own forward floor follow seek inside possible school him million.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Plant leg site probably chair let according past suffer kitchen structure shoulder imagine much provide sport natural bill memory eye sister general air stop woman lawyer usually heart gun opportunity either tonight author represent my want quickly watch visit great quality it want eat meet area pretty site fall picture show middle material mind ability short mind human phone bill quite fast question west whatever network whole where war ball.'
        ]);


        AuditLog::create([
            'host' => '151.73.133.201',
            'referrer' => '181.170.229.205',
            'remote_address' => 'https://www.gordon-powers.com/',
            'path' => 'search/app',
            'query_string' => '?bar=foo',
            'message' => 'Exist computer explain so onto create skill go offer off unit from themselves ahead know grow democratic.',
            'severity' => 'High',
            'type' => 'Permission Change Requested',
            'user_account' => 'qolsen@valencia-moreno.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 3.0; Mobile; rv:44.0) Gecko/44.0 Firefox/44.0',
            'user_agent' => 'Congress feeling.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Hope.',
            'stack' => 'Finally material control dark begin.',
            'exception' => 'Serve page officer sport change difference each spring campaign him right something will successful reveal seat develop eye large general one financial our specific ahead focus attention suddenly impact bring tend wife off compare activity turn.',
            'detail' => 'On born mission produce old forward sense write tough under decade process may want rise second race major responsibility Mrs imagine great factor long wear could teacher those able huge use although all name should guess foot carry style great difference tend culture to little employee modern international wind five open work country high page perform actually rock movement book what true explain human child environment truth party expert put either have fear deep no set agency follow half recent another prevent.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Way billion find second fire movie worker art second development mean even organization again enough teach fish right brother difference already dinner so water treat affect court special no better before experience brother someone even spend popular yeah like whole size environment movie sport sea little establish bank everybody evening marriage TV spring say network pretty like serious you goal responsibility another put drug.'
        ]);


        AuditLog::create([
            'host' => '169.167.123.115',
            'referrer' => '46.111.216.154',
            'remote_address' => 'https://www.johnson.biz/login.html',
            'path' => 'wp-content',
            'query_string' => '?id=1',
            'message' => 'Game church commercial year focus window yet claim perhaps would more degree cover eight short bill air relate only enter.',
            'severity' => 'High',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'lori00@scott.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_6; rv:1.9.5.20) Gecko/2012-04-25 07:00:48 Firefox/12.0',
            'user_agent' => 'Let movement.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Career.',
            'stack' => 'Firm ask focus impact thus.',
            'exception' => 'Lay also score tend find save low put fund management structure beyond American company admit require green all news series language mention stop baby design party do all address eye interest list treat occur store station analysis human hand a already data none important south alone want image range PM both huge.',
            'detail' => 'Sell key front carry they blood trouble decide new across purpose much positive lose training experience interesting on finish be on area sign board western manage cell institution TV participant town them none white reduce admit poor participant process friend soon customer such most air baby realize TV amount run by current.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Difficult month fire style song once network everything or service though interview all product entire think as factor about series prove that realize interesting travel describe morning model grow true parent letter whether space do information attack city reason education company feel final nature style issue set season stage source as expert real exist third candidate person Republican ever product want quality since case join set source make boy program big medical learn network building.'
        ]);


        AuditLog::create([
            'host' => '88.75.225.58',
            'referrer' => '205.204.224.102',
            'remote_address' => 'http://garcia-munoz.biz/tag/app/home/',
            'path' => 'category/explore',
            'query_string' => '?id=1',
            'message' => 'Manager work particularly sense before fight few report arm teach scene throughout information simply.',
            'severity' => 'Low',
            'type' => 'User Signout',
            'user_account' => 'stephanie98@green.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_10_0; rv:1.9.5.20) Gecko/2017-09-17 22:34:36 Firefox/14.0',
            'user_agent' => 'Yes later network.',
            'success' => False,
            'app' => 'App3',
            'source' => 'According.',
            'stack' => 'Relate effort adult career article tax.',
            'exception' => 'Exactly product get herself arrive too sometimes style live southern increase discussion safe true effect agency single long fall sea hand off almost true.',
            'detail' => 'Position billion child sing condition debate themselves structure build defense pick woman ago page finish same institution forward account movie stop simple wait pass yard reflect great cover of join production ball however everybody maintain cause none relate simply month many seven street model film start his through middle small process yeah allow stand drive nearly raise cold include response represent such over quite fear ground want consumer game difficult your result expect rest bank.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Pull national without likely subject sure free structure whether either number single simply sing discuss really class begin sometimes left international apply PM situation successful social he of think get next forward weight girl of include outside I woman two together economy little finish happen season kitchen tree more role to brother.'
        ]);


        AuditLog::create([
            'host' => '170.160.107.228',
            'referrer' => '111.138.11.76',
            'remote_address' => 'https://scott.com/',
            'path' => 'tag',
            'query_string' => '?UNION SELECT',
            'message' => 'Southern peace fish method movie matter sort pattern career consumer action near relate truth list half politics candidate new strategy recent above by fine interest paper.',
            'severity' => 'High',
            'type' => 'Application Startup',
            'user_account' => 'charlestaylor@lee-ferguson.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 6.1; yue-HK; rv:1.9.1.20) Gecko/2018-11-01 07:40:15 Firefox/3.8',
            'user_agent' => 'Relationship.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Send.',
            'stack' => 'Commercial door beat say full.',
            'exception' => 'Democrat only scientist ten design town fill major my view goal education improve ahead degree price company under first manage want light movement impact seat order let them prove difference challenge impact beautiful.',
            'detail' => 'Happen offer product stop almost thing foot bad while everybody manage possible several capital family specific majority thousand billion become eat study style conference sport how open cost since become nothing name open the by expert nearly stage city company fact cold particularly commercial full personal teacher rest another usually result age be trade edge case upon.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Since everyone soon break create appear city off article day traditional tree power consumer teach major so me value how break standard miss chair really thousand game money reveal wife loss boy assume tell newspaper policy imagine hard skin business response benefit few require together through history respond.'
        ]);


        AuditLog::create([
            'host' => '193.63.209.176',
            'referrer' => '88.250.252.148',
            'remote_address' => 'http://king.com/posts/wp-content/privacy.html',
            'path' => 'categories/category/wp-content',
            'query_string' => '?1=1',
            'message' => 'Plant hospital keep book exist relationship walk measure value the development site plan skill place employee exist fish lawyer blood prove will attention position purpose opportunity certainly.',
            'severity' => 'High',
            'type' => 'User Signout',
            'user_account' => 'priscilla30@mccormick.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_3 like Mac OS X) AppleWebKit/532.1 (KHTML, like Gecko) FxiOS/9.8t1177.0 Mobile/60G047 Safari/532.1',
            'user_agent' => 'Ask court.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Change.',
            'stack' => 'Safe take pressure.',
            'exception' => 'Identify throughout customer happen a attention happen though consumer yourself statement without sit quickly control car now sport increase born view imagine return security debate wish bad dinner after source each day push recent magazine production could American off.',
            'detail' => 'Democratic include realize ever high hospital ability your only enjoy my able cover amount perform argue significant lot sing argue too they size money note now stock arm cover skill indeed store black stage free happy wide become only back cover save series have nature word act school party or project lead close its three thing physical current technology own play PM book section never community.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Off hotel among environmental add along get value rich avoid not floor since write pick both social herself represent also three number week partner smile somebody writer left offer heavy full movie kind perform particular still whom culture civil southern Congress chance also responsibility maintain.'
        ]);


        AuditLog::create([
            'host' => '208.198.123.223',
            'referrer' => '122.10.166.129',
            'remote_address' => 'https://gonzalez-roy.com/category.html',
            'path' => 'tag/tags',
            'query_string' => '?foo=bar',
            'message' => 'Us against more think trouble consider say seat book son state employee.',
            'severity' => 'Medium',
            'type' => 'Permission Changed',
            'user_account' => 'collinsnatalie@moreno.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 4.0; mt-MT; rv:1.9.2.20) Gecko/2013-12-09 12:32:40 Firefox/3.8',
            'user_agent' => 'Daughter baby where.',
            'success' => False,
            'app' => 'App1',
            'source' => 'Vote play.',
            'stack' => 'Majority citizen behind eat letter.',
            'exception' => 'Still rate no wish campaign drive run range natural on require gas body continue fast say until either month activity maybe over surface structure debate discuss hair since big arm.',
            'detail' => 'Central market probably detail when ground think black likely practice western outside example mouth cut certain option concern lay tend learn peace rather nor what position good minute marriage song group speech adult nature kitchen story create parent society I lead that course fight sense little learn right source nice society long person national.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Material agent church property wall fight be service new home model approach mean dog pick concern account writer high care maybe make thought activity exactly song forward head information try great quickly along hit key Republican relate off figure recognize international two else least trade lose hit expert turn culture Democrat specific garden half at natural tend expert community unit off entire firm also head watch.'
        ]);


        AuditLog::create([
            'host' => '132.108.5.229',
            'referrer' => '48.180.131.245',
            'remote_address' => 'https://bryant.biz/',
            'path' => 'posts/categories',
            'query_string' => '?DROP TABLE',
            'message' => 'Protect past behind only tonight media police see check if although situation many red stop growth book.',
            'severity' => 'Low',
            'type' => 'Application Startup',
            'user_account' => 'bmorgan@kelly.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_2 like Mac OS X) AppleWebKit/532.1 (KHTML, like Gecko) FxiOS/17.6h7603.0 Mobile/25E844 Safari/532.1',
            'user_agent' => 'Put play under.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Trip else.',
            'stack' => 'Trip newspaper stop health very.',
            'exception' => 'Start past produce option feel second figure business candidate find single analysis herself team yeah tend cold five determine sure office product theory pass light trade author serve matter move agree defense.',
            'detail' => 'Despite fire clear want action citizen success to recently four scene building lay will better kid safe over true discussion another those against pretty sport size analysis particular yet sport night foreign day tree do property each focus see goal wrong may you approach popular while here behind simply your ability notice sound line teacher.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Statement own far sea western meet easy little set front hour situation person country station continue bank behind whom follow mean weight rich reduce weight ever company teacher wind thus around discover however main discussion page hospital author local film goal challenge again business put after way public agree house impact let argue serve risk itself brother indeed join financial radio during new.'
        ]);


        AuditLog::create([
            'host' => '27.214.151.132',
            'referrer' => '176.151.24.253',
            'remote_address' => 'https://www.brown-quinn.com/',
            'path' => 'search/main/main',
            'query_string' => '?foo=bar',
            'message' => 'Lay peace remain fear move bad open heavy small record land name offer natural finish party between she daughter child particularly find.',
            'severity' => 'High',
            'type' => 'User Signout',
            'user_account' => 'colemangregory@reeves-lang.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux i686; rv:1.9.5.20) Gecko/2014-01-13 04:43:28 Firefox/6.0',
            'user_agent' => 'Policy two up.',
            'success' => False,
            'app' => 'App3',
            'source' => 'My break.',
            'stack' => 'Education message treatment field.',
            'exception' => 'Hit since land serve money cultural wait police white direction ten light reflect former guy feeling young today shoulder good wear them next woman manager company bad leg morning apply behind control learn kitchen capital theory against must piece movement pressure nature who among hot young.',
            'detail' => 'Artist occur themselves building good tree sure mother effect arrive loss decade fast human range effort church commercial tell job show quality artist she choose buy black over lay although blood until born surface fast strong property.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Behavior ago modern cut west prepare first story kind enough foot question yard wonder season wrong street six office issue west rest picture human film free myself tree indicate system yard hundred loss relate lawyer hour likely save arrive clear week near mention street exist theory offer east mission when star week.'
        ]);


        AuditLog::create([
            'host' => '199.102.235.229',
            'referrer' => '111.78.203.181',
            'remote_address' => 'https://www.jones.org/home.php',
            'path' => 'blog/explore',
            'query_string' => '?bar=foo',
            'message' => 'Go play model might live million meet note statement watch outside enter those.',
            'severity' => 'Medium',
            'type' => 'User Account Disabled',
            'user_account' => 'hbaker@bell-hickman.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 4_2_1 like Mac OS X) AppleWebKit/531.0 (KHTML, like Gecko) FxiOS/10.8o2251.0 Mobile/31F120 Safari/531.0',
            'user_agent' => 'Anything on race.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Though.',
            'stack' => 'Trip inside letter national.',
            'exception' => 'With modern network fast area four now anyone above family simply training main language above security bill study important view member cut court number clearly rather evidence discover forget product military blue lawyer on necessary plant fly oil amount role employee yard listen lot drive talk ago into worker.',
            'detail' => 'Area leave pattern heart type far reflect debate truth catch century hard military my great wish drive song thing or main experience have last increase yourself suggest free concern mean site mean hot decision case threat early strong allow blood identify science fall see of hard light try war another heart then station deal.',
            'app_version' => '2.3.45',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Animal with stuff agency voice trip each then customer maintain statement study staff us sign wife but war little leg management scientist prevent war court effect southern notice performance participant will happen art send stand everything glass hair represent success commercial then think near lay a apply military anyone hear animal practice her between including education point now part institution somebody goal attack executive claim appear car put picture various list result star mind our remember employee admit peace car lose.'
        ]);


        AuditLog::create([
            'host' => '203.211.142.39',
            'referrer' => '113.180.70.185',
            'remote_address' => 'https://hodges-smith.com/wp-content/terms/',
            'path' => 'category',
            'query_string' => '?UNION SELECT',
            'message' => 'Simply high drive report according hotel show night large avoid collection story bad save rich.',
            'severity' => 'High',
            'type' => 'User Login',
            'user_account' => 'whitekayla@padilla.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux i686; rv:1.9.5.20) Gecko/2017-11-12 02:23:31 Firefox/3.8',
            'user_agent' => 'Debate debate happy.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Four feel.',
            'stack' => 'Could father baby pull.',
            'exception' => 'Purpose clear add positive itself right it be car Mr leader keep condition choice daughter list increase side voice control cold will example box design big only professor discussion history young maybe peace pressure control carry arrive.',
            'detail' => 'Part determine entire wall media glass near sit hope husband performance its top leader son generation audience audience make which necessary edge impact forget current executive past write out difference hit hope model cultural instead everyone stage fill let travel health lead school outside staff hand size none or public son I level against deep stock herself painting other and organization newspaper service write again dog join those relationship thing against mother commercial adult series consider unit sign water soldier tell admit spring.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'My assume suffer role surface fact now much data manager ever floor development go data shoulder raise hundred eat activity southern state debate cost power investment best quickly glass before effect baby raise staff increase service probably any base short issue account break task produce soon receive third player shoulder decide produce chance claim fish college sort read drive approach personal heavy movement western without drive exactly list media difficult after back.'
        ]);


        AuditLog::create([
            'host' => '187.255.198.81',
            'referrer' => '181.56.79.150',
            'remote_address' => 'https://www.vasquez.com/search/home/',
            'path' => 'app/posts',
            'query_string' => '?DROP TABLE',
            'message' => 'Nearly data computer land other investment easy kind between language goal quite goal artist along.',
            'severity' => 'Low',
            'type' => 'Application Error',
            'user_account' => 'simpsonkenneth@rasmussen.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 5.1; my-MM; rv:1.9.2.20) Gecko/2014-09-18 23:28:26 Firefox/3.8',
            'user_agent' => 'Act order race put.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Sell.',
            'stack' => 'My but of walk fine top.',
            'exception' => 'Soldier also watch will mother task security side unit way free give thank lose woman box drop lawyer choose bring new up affect anyone go law ten month alone through pull add.',
            'detail' => 'Discover school oil study wait along budget suddenly tell hospital group cover although because candidate collection star section behavior leave new from stage difficult wear lawyer ok food action present same option vote participant charge I sense painting idea read pull response girl challenge teacher effect cost truth media staff floor chance best state everything choice form play suffer thank whose decide within maybe since society involve school join site claim purpose learn about newspaper clearly check argue late range.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Manager yes increase school surface friend technology cover investment clear read situation activity occur which happen college pick four trial important either song head Democrat identify current popular cold experience picture especially some religious which strong wish child artist century image magazine indicate lay fact tax some remain song school develop finally north call power stage.'
        ]);


        AuditLog::create([
            'host' => '6.126.215.142',
            'referrer' => '165.151.202.31',
            'remote_address' => 'https://howard-lambert.com/search/app/login.php',
            'path' => 'main/categories/category',
            'query_string' => '?DROP TABLE',
            'message' => 'Support price ability clearly table fire mission let compare western something still exactly.',
            'severity' => 'Low',
            'type' => 'Automated Job Configured',
            'user_account' => 'catherine24@king.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_4 like Mac OS X) AppleWebKit/531.1 (KHTML, like Gecko) FxiOS/10.4h8439.0 Mobile/26I967 Safari/531.1',
            'user_agent' => 'Reason practice.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Would win.',
            'stack' => 'Recognize finally discuss around treat.',
            'exception' => 'Skin authority billion artist by tax leader pattern certain toward whole stay present writer end guy lose knowledge modern clear put must what recent run range subject hope exactly second teach agency through eye reason across.',
            'detail' => 'Off political final listen consumer store available keep space a join door measure garden feel pretty anyone water marriage whole draw member middle admit word too already force north service water cut campaign nice born friend allow mother hour national recognize sound that camera across staff choose east thus camera before.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Ahead million low believe pretty beat security think growth chance wrong ahead billion expert build sea yourself pressure south art major table make central law hope people dog down which brother nation attack scientist spend day person arm front spend bring beautiful wind machine dark money kitchen follow.'
        ]);


        AuditLog::create([
            'host' => '64.193.150.20',
            'referrer' => '114.63.85.99',
            'remote_address' => 'https://www.williams.net/main.html',
            'path' => 'search/main',
            'query_string' => '?DROP TABLE',
            'message' => 'Up get response car almost report stage scene ago pull final authority relate think.',
            'severity' => 'Medium',
            'type' => 'Automated Job Executed',
            'user_account' => 'johnsonelizabeth@ramos.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 3.2.2; Mobile; rv:55.0) Gecko/55.0 Firefox/55.0',
            'user_agent' => 'Yes rock apply.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Again.',
            'stack' => 'Mention low his too trip tax business.',
            'exception' => 'Add treatment result let such fish tree because student recent bad partner environment later quality debate not always remember something series positive nor clearly leg eye.',
            'detail' => 'Best what picture half top interest serve agent drug rather measure population thought dark study tough become case kid way have involve professional born young personal experience eight money loss son job entire cost important provide.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Mother eight memory happen course expert spring industry candidate record from chair character name describe seat many choice nice key evidence hear owner place effect office like knowledge quite if east owner price gas short conference specific again.'
        ]);


        AuditLog::create([
            'host' => '104.254.131.4',
            'referrer' => '52.121.9.31',
            'remote_address' => 'http://www.george-parker.com/about.htm',
            'path' => 'blog/wp-content/tag',
            'query_string' => '?1=1',
            'message' => 'Alone describe remember friend example here accept fish view fly party pick medical.',
            'severity' => 'High',
            'type' => 'Application Error',
            'user_account' => 'andersongregory@stone-paul.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 9; Mobile; rv:67.0) Gecko/67.0 Firefox/67.0',
            'user_agent' => 'Green although.',
            'success' => False,
            'app' => 'App2',
            'source' => 'For.',
            'stack' => 'Long indicate industry physical.',
            'exception' => 'Company theory likely generation day among every whatever keep young become certainly movie former ahead feel stage of president still else cover tough contain bed safe art mean career back late consider page wrong admit especially new return respond another race medical event maintain field west black remember understand new wear.',
            'detail' => 'When happy close attorney this wide school tough reduce PM direction brother near everybody wear throw technology account say keep play middle these choose else task must store wind worry important situation executive others section recent part along parent spring read prevent four my democratic both fish understand give serious hold quality decide into because simply open turn may peace help.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Indeed book young citizen situation film red player land class rather president administration listen range break star same high cut garden difficult quite force meeting chair point it one study theory green by those window along near wait small bed be these ability form great consumer task seek team animal century.'
        ]);


        AuditLog::create([
            'host' => '203.225.42.168',
            'referrer' => '68.89.235.42',
            'remote_address' => 'http://parker.com/',
            'path' => 'tags',
            'query_string' => '?UNION SELECT',
            'message' => 'Until concern economy TV since nothing program receive ready listen international now.',
            'severity' => 'Medium',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'donna76@norman-melendez.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.5.20) Gecko/2018-03-22 11:39:14 Firefox/5.0',
            'user_agent' => 'Look seven and per.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Song.',
            'stack' => 'Stop friend because career.',
            'exception' => 'Report thousand reduce send realize focus pick also help expert note decision appear official choose concern or upon season hit fight smile matter hotel give yes allow run raise part or turn give never various with how control tax know project statement follow we.',
            'detail' => 'Magazine mean government stay in evidence national movement sound market such focus where someone save industry example develop field chance tough hair exist not clear spring whom suggest even apply would land responsibility summer despite great less author note oil around foreign sure prepare second meet any since mother cause well vote rate defense do practice forward who computer scene win team such bed character lead shoulder past.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Yes whole unit marriage because fact pretty production ten with southern relationship positive church open method foreign against same here any cold design writer money arrive wind usually remain its meet decide their issue point include lay month off want hot nature toward animal training interesting computer any animal across see student cultural my adult recognize show miss.'
        ]);


        AuditLog::create([
            'host' => '6.232.254.19',
            'referrer' => '162.22.133.91',
            'remote_address' => 'https://www.nguyen.biz/main/',
            'path' => 'posts',
            'query_string' => '?id=1',
            'message' => 'At form around production child foreign feeling with a professional discussion car much no three.',
            'severity' => 'Low',
            'type' => 'Automated Job Executed',
            'user_account' => 'rhondahester@cruz-dixon.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 6_1_6 like Mac OS X) AppleWebKit/531.1 (KHTML, like Gecko) FxiOS/15.9z5726.0 Mobile/50R927 Safari/531.1',
            'user_agent' => 'Interview back.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Many.',
            'stack' => 'Under on interest say.',
            'exception' => 'Cause image change ready interesting memory material relate common responsibility price off focus left trade type stand before will past very learn general eat ball mention child none late clear people son firm plant tax enjoy whatever guy serve specific us Mrs state never nearly president machine vote ready bag sea pattern eat specific.',
            'detail' => 'Avoid indeed why college move upon public laugh evidence trouble each entire seem rise look those field else visit husband decide there fine heart cut system suffer why economic history beautiful responsibility world song build minute exist spring attention various population above concern group forget turn degree table it fight near beyond else compare.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Line hair candidate front than morning population heavy star agreement culture event culture sound or yourself treat decide thing answer image seem never region soldier contain our consumer station she them wall western nature old war feel wall responsibility shoulder president character free important war cut ask authority whether contain husband garden onto safe computer dog determine condition science manager put Democrat simply south product.'
        ]);


        AuditLog::create([
            'host' => '49.66.190.255',
            'referrer' => '207.225.245.120',
            'remote_address' => 'http://www.jackson.com/faq.htm',
            'path' => 'search/tags',
            'query_string' => '?id=1',
            'message' => 'Whatever indicate entire imagine language organization loss process to when board always provide while college without ready full traditional leave view job land.',
            'severity' => 'High',
            'type' => 'Permission Change Requested',
            'user_account' => 'dayrobert@morgan-morales.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 11; Mobile; rv:47.0) Gecko/47.0 Firefox/47.0',
            'user_agent' => 'Wear short.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Subject.',
            'stack' => 'Reach beautiful focus collection.',
            'exception' => 'Certainly want pressure American tell for once activity glass cold foot for reflect kid week answer appear believe glass who campaign into respond everybody pattern my investment add ten civil standard everybody democratic she subject future such message collection scientist method yourself peace value really research purpose society mind her raise.',
            'detail' => 'To language different view special environmental authority health street natural will father herself within happen special growth suffer medical ok safe rise but song have health single us prove manager argue bed now evening sure exist value particularly whole.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Claim position sea director race spring finish lay cold amount past economy certain our area across information skin pressure place apply least open impact guy student determine fall scientist career establish open high newspaper east effect or could nice member rise play get executive window step identify require part professor at food happy heart country long move ball well dinner true story team finish yeah use than various money continue care other just natural forget up name.'
        ]);


        AuditLog::create([
            'host' => '41.111.116.40',
            'referrer' => '186.182.92.110',
            'remote_address' => 'http://www.fields.com/home/',
            'path' => 'tags/search/list',
            'query_string' => '?bar=foo',
            'message' => 'Many end boy color realize natural site nearly line its eye likely production matter look.',
            'severity' => 'Medium',
            'type' => 'User Password Change',
            'user_account' => 'crossgarrett@pitts.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 5.01; sid-ET; rv:1.9.1.20) Gecko/2017-06-29 18:33:35 Firefox/3.8',
            'user_agent' => 'Look leg cup.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Born.',
            'stack' => 'Buy mean event here.',
            'exception' => 'Job long term area off entire throughout impact form possible before former new candidate friend special morning daughter day model body blue young energy collection along responsibility wait offer west heart do American social good meet none.',
            'detail' => 'Laugh deal send Republican fast live tax present several discover admit painting including room get their mention push some establish challenge science new imagine own writer theory political believe size back third blue enjoy commercial about over person theory building single my although south hear.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Whether amount put produce business music development response drive professor father voice produce something still tough better deal eat reduce choose student among believe mean despite best court perhaps him north matter rate school their face either political quite forget bank fact yard ago hotel board without especially recent sit care early room them.'
        ]);


        AuditLog::create([
            'host' => '113.229.233.86',
            'referrer' => '176.217.26.70',
            'remote_address' => 'https://rodriguez-smith.org/tag/post.htm',
            'path' => 'list/wp-content/explore',
            'query_string' => '?id=1',
            'message' => 'Answer alone born one so forward series long space simply interview billion my sing response hand give ask strategy.',
            'severity' => 'Low',
            'type' => 'Debug Message',
            'user_account' => 'vancemichael@nielsen-smith.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_7; rv:1.9.3.20) Gecko/2016-05-11 06:57:06 Firefox/3.6.14',
            'user_agent' => 'Last agent treat.',
            'success' => False,
            'app' => 'App1',
            'source' => 'Strong.',
            'stack' => 'Next city day could similar.',
            'exception' => 'Visit behind age able national work page fall paper then worker stock reveal seek leg us write finally ever approach decision him none raise finish administration hair start partner detail modern federal.',
            'detail' => 'Ball vote bank amount low other almost political leader writer store follow along various month magazine leave very leave wife continue conference someone billion play pay usually pass father let crime peace might truth together east receive market enough newspaper pretty issue tough.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Cover may within deal PM as when spend interview style wrong certain parent finally box population likely skill view money different feeling glass control among receive challenge start such production success small east consider fine term white yet must participant pattern toward of better sign forget black look seem cup provide role news beautiful leader expert today continue yeah skill strategy.'
        ]);


        AuditLog::create([
            'host' => '215.141.3.97',
            'referrer' => '11.22.178.137',
            'remote_address' => 'https://www.roman.com/main/',
            'path' => 'explore/tag/search',
            'query_string' => '?id=1',
            'message' => 'Itself quickly catch popular agency figure else cultural that similar push close physical put whom green question bank color director.',
            'severity' => 'High',
            'type' => 'User Password Change',
            'user_account' => 'melanieweiss@white.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.0.3; Mobile; rv:7.0) Gecko/7.0 Firefox/7.0',
            'user_agent' => 'Particularly within.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Right.',
            'stack' => 'Eye option create.',
            'exception' => 'Even policy ever in power argue various without go travel same every dark beat assume bill positive until similar election where teach food dinner suggest husband edge per too its amount hotel force rich soon store building trade project fund similar industry art beat away among ok lay career knowledge easy.',
            'detail' => 'Truth safe bag everybody matter behavior share pull open drug although past design education away senior six blue same big management may loss door style better dog usually couple difficult no happen party learn there Congress those among green decision quickly fire have assume fast military cover only product appear pattern understand staff and language allow she approach.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Response last air social ten site building study minute church more myself call man operation vote girl wide keep room worker view produce magazine rise phone necessary heart collection process particularly growth second measure experience general deep still movie very event south tree while kitchen idea hope land scene almost over present.'
        ]);


        AuditLog::create([
            'host' => '189.107.186.82',
            'referrer' => '196.55.80.84',
            'remote_address' => 'https://scott-jackson.info/author.html',
            'path' => 'blog/category/blog',
            'query_string' => '?id=1',
            'message' => 'Feel raise floor care interview institution federal or everybody run eight feel early.',
            'severity' => 'Low',
            'type' => 'User Account Disabled',
            'user_account' => 'lindseydaryl@hicks-roberts.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.4.3; Mobile; rv:66.0) Gecko/66.0 Firefox/66.0',
            'user_agent' => 'Other trouble bank.',
            'success' => False,
            'app' => 'App1',
            'source' => 'Entire.',
            'stack' => 'Other rather rich budget.',
            'exception' => 'Cultural woman interest color speak resource suggest over move serve however word event community question reality action worry behavior morning make reveal and bag its cause trade general old parent foreign state place suffer goal meet any happen despite mouth partner among believe write draw eye general care.',
            'detail' => 'Power remember world catch organization keep could than behind happy risk land alone life available pattern notice us agree up west give necessary institution recently lead decide central TV media occur explain young ahead modern produce poor sister quickly heavy resource table major include ability cold at plan tax company kid throw lot organization always course method budget side traditional thank I born hotel crime over two glass enough across far smile knowledge goal view many hour teach two push onto.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Base strategy window edge cut front reduce already onto east focus very team describe write media worker air law later fact say perhaps soon pretty house debate every herself your young heart radio commercial once together weight artist.'
        ]);


        AuditLog::create([
            'host' => '147.168.163.45',
            'referrer' => '30.130.149.177',
            'remote_address' => 'https://www.aguilar-murphy.org/',
            'path' => 'list/explore',
            'query_string' => '?bar=foo',
            'message' => 'Less reach military north skill police lawyer not hotel popular church up sign authority everyone skin drug if thus civil according arrive.',
            'severity' => 'Low',
            'type' => 'Automated Job Configured',
            'user_account' => 'oolson@rodgers.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.5.20) Gecko/2015-03-08 14:24:21 Firefox/3.6.1',
            'user_agent' => 'Upon member suggest.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Black.',
            'stack' => 'Not as hot while management save.',
            'exception' => 'Peace community court east same various rule yes during foreign force fish apply season suggest offer live common maybe movement fast stock like plan suggest whom behind week state know seem mission plant model join although father national now per policy lawyer form skin boy other short perform pick class power shoulder would performance.',
            'detail' => 'Again church southern sound charge official early spend fall money act create building situation same their everybody any bad contain modern fish political per degree look at group page her western become sound case plan hundred industry effort agent cold office system person entire low author poor reflect citizen anyone recent pressure wind once store century list half pass action education now heart prove human money indeed possible game.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Security member go law right perform also keep whatever must soldier resource peace artist majority key book too structure garden Mr face third phone institution despite fight indicate detail base small wall stay office develop standard book single color trouble lose try new teach act group if score those style beat occur church just evening national night member allow radio far public movie happy of nor though else risk song happy black identify save.'
        ]);


        AuditLog::create([
            'host' => '179.52.166.93',
            'referrer' => '220.152.3.104',
            'remote_address' => 'http://www.ramos.biz/list/main/terms.php',
            'path' => 'category',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Benefit performance either poor another activity campaign buy create true society skill woman people focus music white art walk buy race find east democratic past approach about.',
            'severity' => 'Low',
            'type' => 'Permission Changed',
            'user_account' => 'daniellequinn@williams.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 6.0; lzh-TW; rv:1.9.1.20) Gecko/2013-06-15 23:05:24 Firefox/3.8',
            'user_agent' => 'Once what walk.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Ready.',
            'stack' => 'Just free discuss claim.',
            'exception' => 'Own catch fly pick sport may raise rich organization join evening ground win suddenly large anything usually today smile arm beyond tonight page government sound shake parent care public owner style read defense of hold tax none of focus scientist sister close window staff shoulder from reveal new.',
            'detail' => 'Official million agency feel over local us voice present nothing interesting discuss laugh score sign do mouth information many century finally financial service mother others able team energy share write bank seven former easy kid we son imagine expect focus American reach grow sea nice peace simply participant put field stage share computer behavior system near recognize unit dog performance pretty certainly between first day can store garden man prevent since career medical care consider instead situation husband oil end task whose read stand.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Show show list there great listen half daughter official for size federal agency indicate expect it it human thus environment yeah expect so she wear expect good such watch concern consider test season help provide anything life hospital rest serve newspaper financial war effort billion board operation follow force my home often along to place although professional small store protect administration plant else over.'
        ]);


        AuditLog::create([
            'host' => '22.226.159.43',
            'referrer' => '51.50.15.90',
            'remote_address' => 'http://www.bryan.com/main/tag/homepage.html',
            'path' => 'list',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Police difficult goal perform to blue method difference card indicate blue here knowledge analysis board far life trouble add hotel on.',
            'severity' => 'High',
            'type' => 'User Login',
            'user_account' => 'julie38@gordon.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux i686; rv:1.9.7.20) Gecko/2018-10-12 12:47:33 Firefox/5.0',
            'user_agent' => 'Paper process pass.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Reflect.',
            'stack' => 'Last pretty save idea.',
            'exception' => 'Voice see real positive capital sometimes stand hit forward economic model left bed challenge him population meet conference according hope box happen make blood success lose close than little state.',
            'detail' => 'Avoid though raise theory decide think single decide place bad size how water hit collection explain offer decide bit long language imagine every whose compare physical finally us station old share gun consumer machine political next political right through smile story laugh conference structure occur method record she brother oil weight information religious camera short fast star stock business perhaps worker site.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Million life note product modern live western thus rich series too indeed offer always many include head set gun skill car soldier single term establish help now federal physical energy property allow wife wall dinner risk.'
        ]);


        AuditLog::create([
            'host' => '199.226.238.245',
            'referrer' => '73.181.37.136',
            'remote_address' => 'https://wang.org/terms.htm',
            'path' => 'list',
            'query_string' => '?1=1',
            'message' => 'Herself wall billion rule move industry herself within sport give away own difference.',
            'severity' => 'Low',
            'type' => 'Permission Changed',
            'user_account' => 'danielmeyers@rios.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 5_1_1 like Mac OS X) AppleWebKit/534.0 (KHTML, like Gecko) FxiOS/17.4s9833.0 Mobile/38T519 Safari/534.0',
            'user_agent' => 'Century old instead.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Seat.',
            'stack' => 'Arrive hand out night learn.',
            'exception' => 'Figure leave executive out attack cost program same number per chance of prove word night reflect bit well leave statement wrong station financial season concern follow investment stop anything significant including wish others wish southern activity board prove discuss teach off region account western soon herself tend movement decade.',
            'detail' => 'Edge during available bank present difficult kind short include concern group happy subject everyone direction however model only write per apply election kid year the bed until conference thing security including he show skill reduce movie see movement sister spring seem before side skill tree thus group article itself teach suffer let effect month people.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'His alone we model production administration would people so news prevent physical sing head defense community term form second together down consumer world exist daughter speech three house ever assume any this show structure thousand compare people language deep national of certain speak no thank evening tough sit quickly sport whole later television important treatment prepare try performance spring either simple continue marriage town less Congress card summer long sport perhaps.'
        ]);


        AuditLog::create([
            'host' => '63.171.138.85',
            'referrer' => '104.133.108.250',
            'remote_address' => 'https://www.nash.biz/home.html',
            'path' => 'explore',
            'query_string' => '?DROP TABLE',
            'message' => 'Music into right choice wonder continue heavy avoid long give position us realize reach event pretty pass law focus again hold color firm whose other manage.',
            'severity' => 'High',
            'type' => 'Permission Change Requested',
            'user_account' => 'bryan08@gonzalez.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 9_3_6 like Mac OS X) AppleWebKit/535.2 (KHTML, like Gecko) FxiOS/11.4d1908.0 Mobile/04G152 Safari/535.2',
            'user_agent' => 'Media specific care.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Note.',
            'stack' => 'Court summer by staff my.',
            'exception' => 'Enjoy crime despite stay attention goal us eight concern word large garden lay suffer group finally camera tend wife fire east daughter mind eat experience voice name enough paper religious agreement close whom meeting step community it scientist country without end hear quality identify least.',
            'detail' => 'Positive local role third truth voice example program maybe challenge full human dog mouth quite me measure down purpose listen thought mention memory marriage gas lead become industry more political agree force its office woman five enough gas prevent manager east point everyone hope raise human month camera discuss modern certain issue threat the his employee assume west under sell around environment provide minute everything can student economy relate view.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Bed professional executive phone physical lay action program the keep control responsibility baby begin accept arrive sit factor always you list evidence prove color kid matter heart magazine accept law spring its score explain fine story attention customer environment kind seem down allow top certainly force many plan something meet red cold citizen Mr network management although and memory strategy turn pattern boy spend charge heavy.'
        ]);


        AuditLog::create([
            'host' => '39.224.8.43',
            'referrer' => '161.178.45.36',
            'remote_address' => 'https://stewart.com/blog/explore/blog/author/',
            'path' => 'app/blog',
            'query_string' => '?UNION SELECT',
            'message' => 'Young face environment activity here institution involve every close question north arrive speech tell role.',
            'severity' => 'Low',
            'type' => 'Permission Change Requested',
            'user_account' => 'dawsonkendra@vaughan-hurst.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_2 like Mac OS X) AppleWebKit/534.0 (KHTML, like Gecko) FxiOS/10.9h5081.0 Mobile/65W668 Safari/534.0',
            'user_agent' => 'Various sure bed as.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Poor.',
            'stack' => 'Management life note move.',
            'exception' => 'Staff buy she different reach road world nature reduce many work fear visit mean audience boy opportunity bring act hotel themselves position listen option accept tell audience hour hospital determine fish not law job wish meeting wish.',
            'detail' => 'Gun together size politics town crime individual operation look product later year hair us all perhaps subject every cause cover section enough reflect anyone run play especially science world local today show realize serve two personal audience budget man shake or hand most fall take front help six often this well low lose seek American decide base decision here writer image world firm must garden traditional final dog outside box.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Son maintain us way year physical small section way age change reality long follow rock many amount family especially organization everybody hotel baby group would meet memory it seem during until with how series else soldier person certain human forget look decision front.'
        ]);


        AuditLog::create([
            'host' => '98.184.95.16',
            'referrer' => '25.16.108.210',
            'remote_address' => 'http://www.miller-randolph.info/blog/register/',
            'path' => 'main',
            'query_string' => '?DROP TABLE',
            'message' => 'Development improve box chance increase how relate treat yet mention herself sure such ok alone center how table different process chance magazine.',
            'severity' => 'Medium',
            'type' => 'User Account Disabled',
            'user_account' => 'shelly45@harrison-larson.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 9_3_6 like Mac OS X) AppleWebKit/536.1 (KHTML, like Gecko) FxiOS/15.1a9955.0 Mobile/02M009 Safari/536.1',
            'user_agent' => 'Small skin medical.',
            'success' => True,
            'app' => 'App1',
            'source' => 'System.',
            'stack' => 'Together commercial enjoy station.',
            'exception' => 'Wrong anything red positive design day film purpose matter maybe seat similar heart difference particular time anything Mr whether big anything just message current research policy him fire read voice PM exactly never form party free rather leader cold perform.',
            'detail' => 'Discussion like whether law tonight in in at young score foreign civil the something out party own value enjoy recent enjoy argue ask treatment around professor wide represent vote reach bit foreign discuss fund pretty election.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Become only task personal what political choice sit have figure oil model five economic score quite into green dream nice health second can think purpose produce able place report point audience wind about raise most parent hand industry business less value hot great part every and ball court soldier world among speech time write six short.'
        ]);


        AuditLog::create([
            'host' => '192.6.184.170',
            'referrer' => '129.100.214.205',
            'remote_address' => 'http://franklin-gray.com/',
            'path' => 'tag',
            'query_string' => '?id=1',
            'message' => 'Represent black firm season others everyone professor ok single forget attack detail month international term.',
            'severity' => 'High',
            'type' => 'Permission Changed',
            'user_account' => 'ortizfrank@allen-holmes.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.2.1; Mobile; rv:54.0) Gecko/54.0 Firefox/54.0',
            'user_agent' => 'Four environmental.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Above.',
            'stack' => 'Much move get shoulder item.',
            'exception' => 'Night man effect bring visit build want career prepare charge value international cut ability several heavy would whole while fall similar reveal couple Congress moment perform radio movie mother eat third same turn dog president happy modern somebody teacher pay ok several meet grow experience expect who receive friend exactly.',
            'detail' => 'Movie rise budget seat affect movie figure leader since activity local buy size begin section key child tend against rock perhaps market skill economic interview painting would foreign all guy result crime thank Mr experience chance light cold audience wife per table field me week democratic leg forget ok story fly note data north consider hope wind guess allow lose head network successful blue foreign.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Foot send rule theory describe Republican college contain them after edge property entire machine cold land certainly kid exactly see three step room page thus tend computer day foreign worry number across training imagine subject bag number deep choose forget give brother tax approach must also blood read role since air wait environment eat about drug challenge late piece decide practice represent stock Republican lead court area bank series ever north fund training us item baby area before public affect professional.'
        ]);


        AuditLog::create([
            'host' => '215.71.156.172',
            'referrer' => '31.90.170.181',
            'remote_address' => 'https://jennings.com/privacy/',
            'path' => 'wp-content',
            'query_string' => '?bar=foo',
            'message' => 'Center sing very operation water cold strong hotel decide far song explain old story join at me wife two low according senior information west position involve.',
            'severity' => 'High',
            'type' => 'User Signout',
            'user_account' => 'scottscott@manning-baker.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.7.20) Gecko/2015-03-09 16:46:03 Firefox/15.0',
            'user_agent' => 'Bill decade at.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Debate.',
            'stack' => 'Throughout order event pick he.',
            'exception' => 'Star a about bill left friend avoid deep collection strategy whom deal treat large significant race indicate truth tree will mother read themselves short buy increase past degree themselves staff support agent nearly sometimes Democrat child step ask result leave produce us.',
            'detail' => 'Power head loss you probably expect teach can sister detail run Mrs rest foreign town mouth life history mention set believe serious let significant responsibility front and later detail miss four last decision cost design stock teach major south strong two which why race through Mr may simply American skill book common tell particularly early model marriage also prevent great happy course as finally public tend station member of phone budget address bill tough ability prepare as hospital best group type improve pick.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Least side change enough bag history he throw fight help instead model agency well they look factor safe change this second home traditional degree visit full study specific page whole magazine small argue business expert lead first everything little her any hard six southern whom might later student maybe sign again story voice local baby Mr ground star fight deal station generation unit thought time ever rest.'
        ]);


        AuditLog::create([
            'host' => '31.15.243.200',
            'referrer' => '160.241.142.53',
            'remote_address' => 'https://barrera.com/login/',
            'path' => 'app/blog',
            'query_string' => '?DROP TABLE',
            'message' => 'Cultural some energy market shoulder indeed decade man heart stock start continue decide discussion listen.',
            'severity' => 'Medium',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'jonathanhubbard@thomas.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 1.5; Mobile; rv:6.0) Gecko/6.0 Firefox/6.0',
            'user_agent' => 'Pass office.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Local.',
            'stack' => 'Who company either program effort need.',
            'exception' => 'Really list raise parent need message situation similar executive agency stage test parent together him will large word school movement support bed from sound thus whatever similar look military really old start begin pretty fact imagine second seven thing.',
            'detail' => 'Teach and sign million expect technology like there system word fear sort up central now final alone professor anyone their past share factor set weight current always scientist type beautiful move head that off early through either remain population prove billion career lay order only rise central write word simply argue study nation all anything.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Customer move old public to plant season figure as heavy enough little big tell sign himself including mention administration option light than standard lose culture religious value heavy situation mind stock leave early media blue accept.'
        ]);


        AuditLog::create([
            'host' => '168.40.174.94',
            'referrer' => '56.235.66.121',
            'remote_address' => 'https://bailey-hernandez.org/explore/categories/list/homepage/',
            'path' => 'category',
            'query_string' => '?foo=bar',
            'message' => 'Other song attorney little ten agree though president sport stay eat increase either listen dog will art movement.',
            'severity' => 'High',
            'type' => 'Debug Message',
            'user_account' => 'crice@brooks.org',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 5.01; hy-AM; rv:1.9.1.20) Gecko/2021-01-26 04:19:57 Firefox/9.0',
            'user_agent' => 'Could natural.',
            'success' => True,
            'app' => 'App1',
            'source' => 'More less.',
            'stack' => 'Trouble glass suggest not table.',
            'exception' => 'Than fact Democrat professor professor seek western interesting research wait station customer nature simply there manager television determine world safe above study husband stop two similar without system scene pretty right situation its around represent road government include begin friend else group difficult true.',
            'detail' => 'Writer music church mention degree issue despite pattern appear newspaper forget child ten interest from machine hour small fight or throw cold can reduce officer tend moment drive anything involve happen discussion statement hear risk wide indeed both since let cover beyond financial standard nature small adult him air business per safe drive value somebody school wife state join single safe outside room between upon this some both nearly bad relate feeling less scene reflect movie though.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Half animal military degree until to month reduce year you almost hand check discussion impact detail TV audience cover quality human discuss policy appear account job middle author cell address owner region family such young seek move.'
        ]);


        AuditLog::create([
            'host' => '45.36.114.109',
            'referrer' => '167.17.78.179',
            'remote_address' => 'http://tucker-gordon.com/list/categories/main.htm',
            'path' => 'list',
            'query_string' => '?bar=foo',
            'message' => 'Near college area prepare best key dream choose space decade mind result maintain politics far day unit later defense part first toward road you.',
            'severity' => 'Low',
            'type' => 'User Signout',
            'user_account' => 'brownlaura@marks-roberts.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_4; rv:1.9.3.20) Gecko/2017-08-20 20:10:18 Firefox/15.0',
            'user_agent' => 'Eat audience.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Right.',
            'stack' => 'Hair how wonder story receive class.',
            'exception' => 'Happen scene change matter break how us thought from about time land trip wrong drop it develop over yes quality song leave religious two race federal resource half once tell note.',
            'detail' => 'Although suddenly group behavior eight let population certainly put agency these shake agency social at strong computer away girl tough peace market learn surface will government interview you worry senior conference national speak citizen country push for production purpose have medical discover.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Practice theory eye city eight we mention indeed manager century turn upon chance early difference especially bit single current tell would hard yes indeed feeling ok ever exist culture generation region among charge describe sister garden take growth party charge at effect hot ok than effect tree view.'
        ]);


        AuditLog::create([
            'host' => '145.183.42.226',
            'referrer' => '47.97.136.237',
            'remote_address' => 'http://www.gilbert-hayden.info/tags/wp-content/faq.html',
            'path' => 'explore',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Issue tonight serious listen will public writer land whole mean name camera later without top should kind everything consider free than above section manage.',
            'severity' => 'High',
            'type' => 'Debug Message',
            'user_account' => 'patricia89@parker-waller.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 5.0; wal-ET; rv:1.9.0.20) Gecko/2013-05-06 16:33:04 Firefox/3.8',
            'user_agent' => 'Million successful.',
            'success' => False,
            'app' => 'App1',
            'source' => 'Image.',
            'stack' => 'Prove knowledge yard television.',
            'exception' => 'Industry each manage boy song word improve picture sport hour could loss economic authority fish three positive including close race we clear my space decision economic series teach.',
            'detail' => 'Remain more example professional three teach animal eight technology fill and admit part meet along mention agency write evidence ok fine seven mention fact only theory community enter physical society song space listen safe ten specific manage hear owner thank back dinner at of model unit word place new book anyone detail key local two lose although stuff food worker somebody life understand garden we democratic language.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Government list crime control support up thing guess determine heart throughout mention practice capital street cold region moment hair conference add series budget audience radio model program benefit arrive land music even sing street black put kind citizen hot politics another choice myself everyone kitchen large whose onto actually place provide door kid take build performance financial world ok community do win change race actually fall turn back.'
        ]);


        AuditLog::create([
            'host' => '157.207.25.84',
            'referrer' => '27.148.74.95',
            'remote_address' => 'https://davis-lee.com/post/',
            'path' => 'blog/search',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Against collection later bring program hospital day name at life compare give run health use simple back everybody read television.',
            'severity' => 'Low',
            'type' => 'Debug Message',
            'user_account' => 'gregory86@glover.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows 95; uz-UZ; rv:1.9.1.20) Gecko/2012-12-24 16:16:11 Firefox/3.6.20',
            'user_agent' => 'Industry lot reveal.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Child.',
            'stack' => 'Leader let remember.',
            'exception' => 'Much eight only company first particularly shake form thank wide walk production gun member large it interesting compare industry general least focus sound choice example for good race skin city thought here certain form Mrs.',
            'detail' => 'Gun information manage reflect use traditional develop against commercial huge piece evening number shake act degree foot rule road operation myself meet PM chair benefit store though forward store sense may determine determine memory difference land space area day respond man.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Full point adult very campaign organization country child toward office nothing career huge southern whom commercial nation it look total author according modern whether position down start their during popular hot mission especially party couple election alone at thought message treatment social travel concern situation population bad attorney effect develop such group nor page group at your he certain develop attention style to represent box source field west door computer set large night.'
        ]);


        AuditLog::create([
            'host' => '58.7.20.255',
            'referrer' => '126.250.188.193',
            'remote_address' => 'http://www.walters.biz/',
            'path' => 'categories/search',
            'query_string' => '?DROP TABLE',
            'message' => 'Of teacher one writer hard road market own it on keep long crime new ready she.',
            'severity' => 'Low',
            'type' => 'Automated Job Executed',
            'user_account' => 'nathanbanks@cox.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 3_1_3 like Mac OS X) AppleWebKit/535.2 (KHTML, like Gecko) FxiOS/15.2r1823.0 Mobile/23R668 Safari/535.2',
            'user_agent' => 'Agreement along day.',
            'success' => False,
            'app' => 'App1',
            'source' => 'Fight.',
            'stack' => 'Capital type sound on water brother.',
            'exception' => 'Hospital become discuss community unit hand whether approach line approach them nor who family own office service history recognize four per image world clearly back grow occur fly bit concern popular must use him far him indicate likely drop rule type describe clear task point tonight provide past international information he outside fire run guy.',
            'detail' => 'Partner sometimes candidate hope team there professor start attack discover rate put whom modern certain young everyone response test hand deal figure strategy politics teach important story history pretty six Congress brother apply morning guess language one side high husband night product the control position message avoid party magazine myself believe may expert ago property item before building point.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Chair call boy responsibility from news cost act end player product forget appear word friend lose town ground far success although far ground peace always send where hour yeah best trade society forward president class wonder indicate leader one close various whom task nation type father it if glass south future happy within president late old prepare soldier.'
        ]);


        AuditLog::create([
            'host' => '97.241.166.95',
            'referrer' => '41.188.164.83',
            'remote_address' => 'http://taylor.com/',
            'path' => 'wp-content',
            'query_string' => '?UNION SELECT',
            'message' => 'North take federal sit serve also large product black family within seek fight parent per mean conference term.',
            'severity' => 'Low',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'wolfcrystal@garrett-sharp.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 10_3_4 like Mac OS X) AppleWebKit/535.1 (KHTML, like Gecko) FxiOS/9.4u0037.0 Mobile/41G784 Safari/535.1',
            'user_agent' => 'Those attorney.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Today.',
            'stack' => 'Push machine prove role meeting.',
            'exception' => 'Improve case budget participant sense by light lot such specific under performance drug professor dinner every western true since different analysis lose drug every stand simply low reflect store news campaign office.',
            'detail' => 'Sit man rock one author cover of off computer population assume card dinner strong soldier trouble standard that while mouth foot important wind citizen although ask meeting stage will result indicate require evidence arrive however newspaper increase force.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Civil go economic address ahead organization phone language rich anything strong fill ahead exist design current begin finally machine soon poor field include fund tell society share himself situation indicate finally development still share boy instead go lay safe today until camera assume brother affect identify kitchen trade stop kitchen ok other like hundred left bag ground other our financial we ask onto wear morning sometimes number main person sign nothing expert modern common yes key admit stop.'
        ]);


        AuditLog::create([
            'host' => '208.49.101.33',
            'referrer' => '120.122.28.238',
            'remote_address' => 'https://nicholson.com/homepage.asp',
            'path' => 'categories',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Glass only eye follow different economic dinner hotel participant newspaper allow number site young.',
            'severity' => 'High',
            'type' => 'Automated Job Executed',
            'user_account' => 'xadkins@martin.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_1_1 like Mac OS X) AppleWebKit/531.0 (KHTML, like Gecko) FxiOS/12.0u7935.0 Mobile/87F259 Safari/531.0',
            'user_agent' => 'Cold way thought.',
            'success' => True,
            'app' => 'App1',
            'source' => 'One.',
            'stack' => 'Lose you risk difference idea quickly.',
            'exception' => 'Whether maybe house inside miss last ahead if add down less where buy even generation though where support assume food never traditional range great source box put apply often concern down law member run address maintain account also thousand daughter single education few single choose her outside economy believe large.',
            'detail' => 'High bit toward force note rock prove general soldier management next often church candidate memory take section also case rule by tend whatever step court turn first pick mother training agent miss imagine war popular large oil shake born kitchen different cell various identify employee relate.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Whether old property miss attack know career before house Mr himself quite push street leader fund run issue increase put seat candidate feel hold watch then call really close believe specific thousand daughter allow couple mention enjoy together mission himself ask view cold interesting black.'
        ]);


        AuditLog::create([
            'host' => '59.162.186.65',
            'referrer' => '182.33.111.233',
            'remote_address' => 'https://www.kelly-barajas.com/',
            'path' => 'category',
            'query_string' => '?UNION SELECT',
            'message' => 'Around carry within people remain industry artist number nation rule manager window happy describe pass animal anyone actually.',
            'severity' => 'Low',
            'type' => 'Application Error',
            'user_account' => 'donnakirby@whitaker-douglas.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_7; rv:1.9.5.20) Gecko/2019-02-17 07:41:10 Firefox/3.6.19',
            'user_agent' => 'Everything economy.',
            'success' => True,
            'app' => 'App3',
            'source' => 'How sea.',
            'stack' => 'Bag culture history pick million main.',
            'exception' => 'End within case perhaps visit blood win military for number direction conference both listen include all citizen particularly leave national including card like total book appear within science why whole item science.',
            'detail' => 'Responsibility everyone coach parent important less today save space happy west so space themselves move gun fine why professional material color head less mean citizen national believe stop point almost sense study huge nature cause amount debate chance smile free management country past church past sit whether half every address act among partner our benefit young marriage receive kitchen public view less mean for join guess key practice quality leave quickly vote cultural physical already could understand base growth wish it.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Camera attack play authority read cup politics general officer gas conference onto political media performance challenge nearly cup energy business need think beyond edge soldier season learn along heart one she education conference decide who boy behavior campaign hard majority main sure group now matter finish man check agency beat television south evidence actually report market camera week big environment different write less discuss center matter threat letter heart evidence put result character lose I nice grow this southern possible stage south.'
        ]);


        AuditLog::create([
            'host' => '129.183.180.108',
            'referrer' => '166.204.204.21',
            'remote_address' => 'https://gonzalez-kelley.com/tag/tag/explore/author.htm',
            'path' => 'blog/categories',
            'query_string' => '?foo=bar',
            'message' => 'Less responsibility similar fast school always change money everybody account note until rule student nearly green center speech administration example building weight generation mission mouth simple where.',
            'severity' => 'Low',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'andrew52@perry.org',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_0; rv:1.9.6.20) Gecko/2012-05-02 06:18:30 Firefox/10.0',
            'user_agent' => 'First top half.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Chance.',
            'stack' => 'Hold whose whatever structure out.',
            'exception' => 'Capital somebody word source result under military wide four idea particular rest deep from nice win partner man on accept theory couple western two pretty themselves heart country stop in share west there specific everyone policy around amount.',
            'detail' => 'Thousand responsibility and image almost respond worker raise enter section enjoy in those probably out save science money might sometimes question party friend crime nature paper force five condition table hour business risk thought late general more.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Member beyond change model box sign surface exactly name everybody buy far finish choose choose surface middle already meet water look right stage me various could anything loss him responsibility condition political head provide defense leave baby need church machine street step technology movement soldier military forward production heavy notice establish it early least only test court reason adult leave game product still why hour industry stay college hear should story Mrs science enjoy seat himself ability ball miss prove week mind.'
        ]);


        AuditLog::create([
            'host' => '65.43.62.202',
            'referrer' => '178.29.79.243',
            'remote_address' => 'http://white-powell.com/list/explore/index/',
            'path' => 'blog',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Unit general dark weight shake forward gun couple shoulder address raise talk prepare officer discussion general near international bar now author national hope new travel consider home whether.',
            'severity' => 'Low',
            'type' => 'Automated Job Configured',
            'user_account' => 'jolsen@gardner.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 14_2 like Mac OS X) AppleWebKit/534.0 (KHTML, like Gecko) FxiOS/15.1i6956.0 Mobile/79A899 Safari/534.0',
            'user_agent' => 'Of best gun.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Decide.',
            'stack' => 'Become keep week believe.',
            'exception' => 'Mission statement take stay area keep glass help management treat low road guess increase important matter road send money paper easy high institution rather those show me great future pull body allow course road strong season whole share must get so stage power wide whatever bank as my clear performance else message fine.',
            'detail' => 'On present option century act he account raise leader conference keep same management beat foot everything college increase behind particular bit exist ok performance take our front relationship cause see material mind left would manager increase industry family former letter place part road reduce oil my answer bar after magazine someone point agree majority fire drop tax whatever great vote listen reality town source moment leg much current key course picture.',
            'app_version' => '2.13.4',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Discuss management audience either clear their just push strong table our white fly occur example your mind gas of friend enjoy interesting change follow give do respond risk will about economy success wear great become reality note fast world employee girl radio space worker catch send TV decide poor administration style director look century.'
        ]);


        AuditLog::create([
            'host' => '160.30.10.215',
            'referrer' => '179.11.30.218',
            'remote_address' => 'http://hart-flores.com/',
            'path' => 'posts/list',
            'query_string' => '?id=1',
            'message' => 'Skill radio too professor occur west point language everybody again require may themselves put goal over protect husband easy down knowledge large bill financial oil goal.',
            'severity' => 'Low',
            'type' => 'User Signout',
            'user_account' => 'ljackson@stewart.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 3_1_3 like Mac OS X) AppleWebKit/535.0 (KHTML, like Gecko) FxiOS/14.3a4316.0 Mobile/91K494 Safari/535.0',
            'user_agent' => 'American country.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Allow.',
            'stack' => 'Such social food major new buy note.',
            'exception' => 'Product anyone property fear affect even always space someone central and way maybe sure think common beautiful myself sing loss high low professor upon action right blood walk discover build truth face since success note few data knowledge loss certain.',
            'detail' => 'Perhaps significant market pressure speech name hand American prove major whole only risk accept poor firm measure factor and fast life young ten thousand throughout activity wonder skin professional great let choose would stop scientist successful different provide she include guy left take wife scene successful away from whose TV just region week claim Republican itself official chance special court class create would those these out evening yet executive under list dinner degree quality benefit hand against minute.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Camera vote environmental bill talk until organization cause yeah majority east data tax instead animal majority suddenly dark them hair bag join challenge coach course trial message speak type affect east board month speak blood white himself live dinner product series TV organization finally themselves will beyond anyone better expert.'
        ]);


        AuditLog::create([
            'host' => '167.130.101.31',
            'referrer' => '3.0.163.49',
            'remote_address' => 'https://barton.com/login/',
            'path' => 'main',
            'query_string' => '?bar=foo',
            'message' => 'Include fight team enjoy ready woman several onto tonight smile actually less price history.',
            'severity' => 'Low',
            'type' => 'User Signout',
            'user_account' => 'alexnelson@anderson.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_4; rv:1.9.4.20) Gecko/2012-09-10 05:19:21 Firefox/3.6.16',
            'user_agent' => 'Practice region.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Moment.',
            'stack' => 'Defense some participant radio scene.',
            'exception' => 'Drug paper father thank grow player responsibility whether natural return seek forget special early agent part debate evening use inside run face back go us various little expect building yard have rather set weight others former.',
            'detail' => 'Clear maintain health radio concern clear live seat although hair field total since understand without meeting wide which when organization behavior seven high federal man dinner theory either left various happen even senior land dark task history Republican.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Per me person would address successful should newspaper first usually old child once popular right vote resource approach risk if hold movement without reality seven ability class measure away describe wait personal box new away manager answer economy hour site factor above section your bring purpose major south place.'
        ]);


        AuditLog::create([
            'host' => '54.147.90.65',
            'referrer' => '85.102.133.230',
            'remote_address' => 'http://www.snyder-vazquez.com/',
            'path' => 'posts/wp-content/tags',
            'query_string' => '?1=1',
            'message' => 'Public challenge ask man carry wide want thing should glass way past writer statement discuss road now add doctor discover pull southern early.',
            'severity' => 'High',
            'type' => 'Permission Changed',
            'user_account' => 'alisonanderson@wolf.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux i686; rv:1.9.5.20) Gecko/2019-10-18 07:08:15 Firefox/3.8',
            'user_agent' => 'Light theory save.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Fly sense.',
            'stack' => 'Stop base once score.',
            'exception' => 'Will body claim necessary fund field success drive west adult course case run miss somebody south institution another three work news pick data describe wear year give wide speak all oil interest.',
            'detail' => 'Really western owner significant decide effect major live firm deal position happy film heart call machine court TV mouth sort suggest several south training collection experience future on really meeting she tree information within series gun professor bag condition generation onto race but word to available fine explain process since stand situation also free play investment positive offer poor traditional staff.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Seem discover them practice else decide of country either we inside run send partner maybe young voice peace seek service system possible able shoulder someone visit hair look visit water box crime week ago draw tell serve age past.'
        ]);


        AuditLog::create([
            'host' => '42.13.244.255',
            'referrer' => '173.165.183.14',
            'remote_address' => 'https://rojas-bennett.com/main/',
            'path' => 'wp-content/main',
            'query_string' => '?bar=foo',
            'message' => 'White use she by right a key although century fear him practice able speak toward everything news although.',
            'severity' => 'Medium',
            'type' => 'Application Startup',
            'user_account' => 'allison07@hartman.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 6.2; hsb-DE; rv:1.9.1.20) Gecko/2017-06-08 16:00:47 Firefox/3.8',
            'user_agent' => 'Sure everything.',
            'success' => False,
            'app' => 'App3',
            'source' => 'Top heavy.',
            'stack' => 'Bank born order size.',
            'exception' => 'Attorney live happy ground major house catch site analysis window term us let hand laugh key deal spring education defense everyone happy war wear season strong store material bank every others color pattern heavy such truth think not society consider behind father treatment arrive Democrat arrive range in defense race under.',
            'detail' => 'Party senior reason like human east four future side week ball hair right charge once budget although way father democratic stay pass far blood paper apply officer grow subject entire central case education behind interview gas.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Certain teach source its eat challenge series local detail local during off certainly safe resource and especially inside receive weight pay although radio under which maintain Republican claim soon weight paper everybody investment pattern something do future hard already really benefit itself almost significant listen detail peace bring song bill can in institution lay item a stuff garden.'
        ]);


        AuditLog::create([
            'host' => '207.219.118.179',
            'referrer' => '101.64.61.1',
            'remote_address' => 'https://proctor-marquez.com/',
            'path' => 'posts',
            'query_string' => '?id=1',
            'message' => 'What role television sense light see write talk attorney speech western kid.',
            'severity' => 'High',
            'type' => 'Application Error',
            'user_account' => 'james05@jackson.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 5.1; hy-AM; rv:1.9.2.20) Gecko/2012-11-14 15:30:08 Firefox/3.8',
            'user_agent' => 'Fact vote degree.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Home.',
            'stack' => 'Area cell expect system.',
            'exception' => 'Herself range artist use work sound respond wonder result animal chair because service sound friend back even final available save rule us base north.',
            'detail' => 'Until keep fish keep hold cost set purpose money compare whose successful economic social must know grow amount scene care direction difficult culture our democratic season organization prove commercial military human kid season subject think movie Mr win language if arm agent town them adult major ago relationship son those night hope bar bill worry true total born week Republican international spend sometimes daughter old morning character chance certainly various sense local join common trouble chair contain old.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Understand truth pressure statement again unit year clear manager everyone relationship option edge stock leave which executive high nor set down into per expert four air future word about ago end respond without among significant hundred.'
        ]);


        AuditLog::create([
            'host' => '132.238.230.164',
            'referrer' => '207.142.124.77',
            'remote_address' => 'https://www.leach.com/',
            'path' => 'main/list',
            'query_string' => '?bar=foo',
            'message' => 'Trial peace instead forward my cover beat series about usually word me movement four include majority organization simple leg least artist public similar home argue save.',
            'severity' => 'Medium',
            'type' => 'Application Error',
            'user_account' => 'christopher98@caldwell.info',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows 98; Win 9x 4.90; lt-LT; rv:1.9.0.20) Gecko/2020-05-28 21:03:33 Firefox/3.6.18',
            'user_agent' => 'Forward image.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Product.',
            'stack' => 'Moment area consider seem.',
            'exception' => 'Suddenly film certainly will ahead sure its those explain maintain practice agency head might seat six item country development until anything senior hit natural yeah station use real reality arm then loss could ever later drive present bag key first easy value himself.',
            'detail' => 'Often beautiful protect everyone open talk want child speak some door their sometimes his issue really computer unit degree full stop movement decision natural hand study professional not piece look process left condition policy hotel structure blood go care reach like hard instead support surface former.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Check none surface north others themselves quality his own city Congress pretty age big area skin tax training for final yard age huge again off western manage image responsibility after behavior movement decision bag quite finish state clear now staff hair it product boy term prevent surface bed card prove big imagine public contain song memory ten writer offer still save thing financial hear Mrs entire each build later can daughter interesting occur money animal collection study perhaps any woman chair behind.'
        ]);


        AuditLog::create([
            'host' => '135.201.62.174',
            'referrer' => '27.139.204.226',
            'remote_address' => 'https://www.blake.com/',
            'path' => 'blog',
            'query_string' => '?DROP TABLE',
            'message' => 'Stay road girl among allow throughout decide research get away little service deal case speech morning none team thus production build example order save.',
            'severity' => 'High',
            'type' => 'Application Error',
            'user_account' => 'grantbrenda@bowman.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 5.1.1; Mobile; rv:31.0) Gecko/31.0 Firefox/31.0',
            'user_agent' => 'Special respond.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Social.',
            'stack' => 'Move save home.',
            'exception' => 'Senior director direction item all happy head room see open song despite strategy time local source news relate around free into compare treatment scene task create magazine believe kid television run process piece test time degree alone hundred these civil just sing Democrat task style every goal assume it agreement central to step school out.',
            'detail' => 'East guess guy this instead national face five election central involve or explain matter other its moment social fight star third partner onto firm attention already five brother magazine artist husband follow suffer management open project chair health though south conference manager perform government whose strategy way policy.',
            'app_version' => '2.3.45',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Near be property support glass often show medical pretty mouth political take against finish young hotel probably long eight book treat series southern huge trip nation page everything parent if cell without special ok hair share research adult along represent establish pretty growth wish use role development customer sort give factor rate method theory total analysis early himself feeling thank child condition activity important happy social easy professor face material party product firm.'
        ]);


        AuditLog::create([
            'host' => '40.160.127.69',
            'referrer' => '209.139.54.56',
            'remote_address' => 'http://www.peters-underwood.com/search/',
            'path' => 'app',
            'query_string' => '?1=1',
            'message' => 'Buy treat among report soldier him economy visit take partner various some page anyone study institution seek physical question home make listen true possible everyone.',
            'severity' => 'Low',
            'type' => 'Permission Change Requested',
            'user_account' => 'jacob60@wallace-miles.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 9_3_6 like Mac OS X) AppleWebKit/535.1 (KHTML, like Gecko) FxiOS/12.3c7421.0 Mobile/01Y553 Safari/535.1',
            'user_agent' => 'Model various one.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Since.',
            'stack' => 'Letter yeah serve dog.',
            'exception' => 'Thought wait officer commercial pull reveal still church claim grow type quickly environmental no environment amount expert involve just fish old bank military determine receive wait my road brother project serve side suffer someone establish meeting executive building everyone ever toward south couple game cell.',
            'detail' => 'Maintain during deep perhaps reality thing difficult improve discuss professor four analysis around through big small air step partner Republican machine team teacher attention avoid anything buy poor help blue more space team walk tonight list sometimes stop action.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Series task likely make project worry appear information doctor challenge behind through fish seat TV interest public risk list increase wide drop through turn garden edge chair weight discover place gas exactly white his you purpose wind third see enough compare although although by out throughout bed small leave.'
        ]);


        AuditLog::create([
            'host' => '14.200.76.87',
            'referrer' => '79.153.232.1',
            'remote_address' => 'https://www.davis.com/tag/tags/home.htm',
            'path' => 'explore',
            'query_string' => '?id=1',
            'message' => 'North environment add cultural Mrs notice site even through sense recently agreement change ago strategy cup reason where including read spend over break occur carry she.',
            'severity' => 'Low',
            'type' => 'Automated Job Configured',
            'user_account' => 'brandi43@murphy.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Windows NT 5.2; gv-GB; rv:1.9.2.20) Gecko/2011-08-31 10:27:40 Firefox/13.0',
            'user_agent' => 'Film computer far.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Now make.',
            'stack' => 'Rate seem I probably sense effort sort.',
            'exception' => 'Success society degree deep respond we other food admit young beautiful fill network investment research past sort possible behavior tend traditional reveal economic do stage condition low worry pass grow administration explain course next image check market so science site learn indeed season region listen add kitchen process tough usually sure artist.',
            'detail' => 'Even partner edge take PM movement recognize recent add rich morning area scientist certain quality time design land model western child hour realize notice total thousand data would style writer attorney when order on want training scientist condition address authority any leg account west guess draw back feel.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Inside thing find church section officer attack help cup degree always market entire couple drive social office support require product couple happy energy our fly whether senior mind show state tax plant late color any film general door nor process song public meet open during cover.'
        ]);


        AuditLog::create([
            'host' => '163.4.149.217',
            'referrer' => '205.86.44.219',
            'remote_address' => 'http://hart.net/app/post.php',
            'path' => 'app/blog',
            'query_string' => '?1=1',
            'message' => 'Lawyer send bill perform morning to see talk camera exactly green day whether.',
            'severity' => 'Low',
            'type' => 'User Login',
            'user_account' => 'gonzalezrobert@casey-vega.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.6.20) Gecko/2017-09-20 17:30:22 Firefox/3.8',
            'user_agent' => 'Order to religious.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Fire fund.',
            'stack' => 'Present get lot thus plant never water.',
            'exception' => 'Trouble candidate I nor nice eat political respond they particular bad subject woman participant herself so issue their just father then all address environment president west see want campaign knowledge stop different here get situation especially score list by seek listen determine suggest member rather almost.',
            'detail' => 'Social bill player camera strategy watch miss government rest fish mouth agreement TV grow something cold let central chance image himself product these when couple choose majority apply window oil especially market month daughter people seek word you always relationship when home for would image team part road none but citizen growth save treatment fight identify college cup money inside allow international next hope carry everyone voice require want mean so beat rate.',
            'app_version' => '2.13.4',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Realize must bag series role large drive much citizen my increase country deep only check thank up break face necessary cell several machine house none agency song spring service me reduce get sell pretty easy enough develop step notice step military heart nearly education wear.'
        ]);


        AuditLog::create([
            'host' => '34.180.210.149',
            'referrer' => '197.109.238.136',
            'remote_address' => 'http://benson.com/app/index/',
            'path' => 'blog',
            'query_string' => '?bar=foo',
            'message' => 'Toward quality fact when score sport today product hundred form arrive suggest concern boy your debate he opportunity analysis door authority country design most response serve serious.',
            'severity' => 'High',
            'type' => 'Automated Job Configured',
            'user_account' => 'elijahbrown@cobb-watson.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.5.20) Gecko/2014-02-16 23:47:21 Firefox/6.0',
            'user_agent' => 'First election go.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Fear very.',
            'stack' => 'Public expect might hospital what hand.',
            'exception' => 'Necessary raise treatment mean rule politics itself while improve three perhaps factor letter every environmental thus miss sing edge billion old cut game day drug machine case receive garden ball information although special officer stand cost goal smile month record hair turn measure keep color talk world foreign enough bed record treatment technology.',
            'detail' => 'Film study population but wife red program may officer management evening international imagine factor they south natural man give policy performance indicate article need gas force indicate shake service face project heart history help east despite a federal lay trial ability fine pull choose fact data turn whole threat book want student information of letter factor up leave benefit war nor action easy for product address compare inside who small star almost create across ability.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Especially own environment every score chance civil store never blue stuff life art rest human news theory appear according artist believe group spend air rest significant security five message charge unit challenge such onto popular sister goal than commercial himself energy executive experience stay real want site authority wall gas million also fact task almost road able economic production media film result fall more their paper home hair.'
        ]);


        AuditLog::create([
            'host' => '58.163.132.55',
            'referrer' => '124.215.186.43',
            'remote_address' => 'https://www.wilson.info/login/',
            'path' => 'main',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Tonight answer another side low tell image policy thought painting likely bring market low.',
            'severity' => 'High',
            'type' => 'Debug Message',
            'user_account' => 'nhunt@blackburn-lee.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_5; rv:1.9.5.20) Gecko/2021-07-08 16:33:58 Firefox/3.6.2',
            'user_agent' => 'Word develop each.',
            'success' => True,
            'app' => 'App1',
            'source' => 'Security.',
            'stack' => 'Raise police she view night.',
            'exception' => 'Deal statement teach effort develop accept trade quickly around boy subject idea cause at identify inside sit type represent able wide citizen three base near since who hand study.',
            'detail' => 'Same cover eye easy hotel color attack message call final participant thank property loss activity create against spend us race wrong window all education themselves opportunity whatever can skin like large skin bad figure surface cold.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Full matter song line newspaper here simply deep course total democratic common line himself summer simply community almost dream so business go bed weight political loss usually heart month economic TV so lay reach until quality us impact food live body fish occur list information.'
        ]);


        AuditLog::create([
            'host' => '95.249.218.124',
            'referrer' => '46.112.188.174',
            'remote_address' => 'http://hughes.biz/main.html',
            'path' => 'tag/categories',
            'query_string' => '?bar=foo',
            'message' => 'Community vote senior thousand minute sort maybe task professional wonder market news man I power him.',
            'severity' => 'Medium',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'ashley51@russell.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.4.2; Mobile; rv:27.0) Gecko/27.0 Firefox/27.0',
            'user_agent' => 'Operation subject.',
            'success' => True,
            'app' => 'App2',
            'source' => 'On.',
            'stack' => 'Should half air top smile find.',
            'exception' => 'Social glass like crime dog summer then find hospital win control performance establish just professor woman inside stop positive affect everybody candidate itself yourself win challenge every their never kind door both network world form she feel executive kitchen seat success course.',
            'detail' => 'Threat them ok however wrong area style ready maybe perhaps couple though gas she set whatever both help history life whom Republican loss political go manage yes station manager word answer trouble culture contain him rich major member seek machine walk attention place loss street around actually debate success parent away mind official focus stock off agent contain senior yeah guess much never agree car including change little whatever avoid particular center third church quickly coach civil half within street billion method.',
            'app_version' => '2.3.45',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Unit group throw challenge central decision daughter stand leg half father type believe glass above administration never majority receive walk cause read away adult impact find between camera mean wonder writer office within eight market important bag five size middle place law score by figure record once play data return magazine church once campaign hard value.'
        ]);


        AuditLog::create([
            'host' => '139.188.133.86',
            'referrer' => '3.96.72.91',
            'remote_address' => 'https://www.stevens-watson.com/index.php',
            'path' => 'posts',
            'query_string' => '?foo=bar',
            'message' => 'Phone marriage policy year century page set quickly mission use sense theory impact on nearly president knowledge learn however difficult.',
            'severity' => 'Low',
            'type' => 'User Login',
            'user_account' => 'cassandra26@robinson-fuentes.net',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_11_3; rv:1.9.4.20) Gecko/2016-02-09 08:22:09 Firefox/3.6.5',
            'user_agent' => 'Tree police Mr.',
            'success' => True,
            'app' => 'App3',
            'source' => 'Growth.',
            'stack' => 'Executive total difficult line.',
            'exception' => 'East house national care ever claim author through space any reach question section successful deep your team evidence station current age dog fund knowledge treat feeling ready seek choice him couple themselves spend leg she.',
            'detail' => 'Crime him mission official behavior push money with fill throw break break since station finally thousand owner gas run meeting charge to but collection concern never rich series into day easy radio its choice improve have station actually speech couple way rich including east once religious law include question talk at security seat quickly role instead situation live develop ok.',
            'app_version' => '1.8.12',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Sing market must bad moment speech people computer see forward lawyer sister market process son board forget together produce agent his back throughout score side red throw left like describe they pressure let might meeting mind water street impact production truth newspaper station way arrive then center good above son return good know.'
        ]);


        AuditLog::create([
            'host' => '209.80.35.73',
            'referrer' => '102.47.235.210',
            'remote_address' => 'http://hayes.org/categories/author.asp',
            'path' => 'wp-content/tag',
            'query_string' => '?foo=bar',
            'message' => 'Say traditional seat Republican receive decide measure could among beat glass build father move daughter impact wind store prepare sure mind small situation organization college.',
            'severity' => 'Low',
            'type' => 'User Login',
            'user_account' => 'mitchellwhite@wilson.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (X11; Linux x86_64; rv:1.9.7.20) Gecko/2018-09-13 20:22:31 Firefox/14.0',
            'user_agent' => 'Another message.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Leg.',
            'stack' => 'Wish probably ever weight.',
            'exception' => 'After pay send door several again begin move speak blue new citizen that down effect officer situation there job house range accept themselves strong start three change camera page drop capital Mrs certainly person floor industry every industry TV war manager well small have grow.',
            'detail' => 'Management suddenly serious effect some lot something together manage writer past husband like owner statement seem president would paper industry name be story machine almost gun realize purpose onto woman sport pattern reality author yet suggest while when alone another when several language condition night decision development stop most open section top TV water accept newspaper game different all.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'People remain growth amount commercial concern according friend still protect town wind at option media mission probably them government account key less one place color future also somebody financial could eye buy than discover economic perhaps drive change standard course billion final technology serve manage suffer start cultural.'
        ]);


        AuditLog::create([
            'host' => '52.62.80.147',
            'referrer' => '106.109.12.233',
            'remote_address' => 'https://www.baldwin-hill.info/search/category/privacy/',
            'path' => 'posts',
            'query_string' => '?id=1',
            'message' => 'Bit so story open thing scene task leader table white performance whether wait arrive floor organization reduce radio exactly camera into development model work.',
            'severity' => 'High',
            'type' => 'Debug Message',
            'user_account' => 'qmartin@cross.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 8.1.0; Mobile; rv:24.0) Gecko/24.0 Firefox/24.0',
            'user_agent' => 'Positive level.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Suffer.',
            'stack' => 'Mention type short.',
            'exception' => 'Lawyer somebody true air animal you per mother help dream risk of herself management relationship cost majority opportunity certain people seven manage care important show financial travel traditional for especially then investment despite phone rock happen series act event election.',
            'detail' => 'Even why buy audience without investment hard simple its operation teacher fear market later several but east development gun performance see pattern key gun figure test that involve visit movement key hair stage guess pattern cell hair high explain system language game store wish six bed action minute property about beautiful.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Drug reveal appear church very these himself maybe quite change generation tree sign after tree experience court wear key hospital often produce main Congress democratic wear board eye customer game hit name money agree although group science seven social stage late grow possible sign line voice but ok administration benefit hear decision huge discover behavior dream soldier protect.'
        ]);


        AuditLog::create([
            'host' => '128.27.153.246',
            'referrer' => '146.163.117.181',
            'remote_address' => 'http://www.mccormick.com/list/posts/about.php',
            'path' => 'wp-content',
            'query_string' => '?id=1',
            'message' => 'Particular way idea hair into available our join nature half pressure think wrong many couple parent.',
            'severity' => 'Medium',
            'type' => 'Automated Job Executed',
            'user_account' => 'garychase@white.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 10_3_3 like Mac OS X) AppleWebKit/534.2 (KHTML, like Gecko) FxiOS/16.3a4570.0 Mobile/02V033 Safari/534.2',
            'user_agent' => 'Dinner talk various.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Contain.',
            'stack' => 'Per particularly number office.',
            'exception' => 'Send ahead issue who sell owner young all college kind race form personal later Democrat magazine third main none think trouble loss group issue.',
            'detail' => 'Agency us section have lot cover foot grow cultural teach agreement bank serve wrong easy company beautiful recognize cold reveal body ahead respond sit hotel guy without success product hit by sport necessary own perhaps end ball form design important I rate.',
            'app_version' => '2.3.45',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Laugh raise plant magazine involve sing however section by on assume easy find prepare sell model any design also arrive shoulder affect daughter key simply voice voice admit drop city raise group million doctor from military short pressure marriage down these goal direction reach knowledge step side walk full arm garden million spring national improve attention old here consider economic night piece everyone mouth economic four history per admit simply nation pay father brother board boy.'
        ]);


        AuditLog::create([
            'host' => '142.107.12.37',
            'referrer' => '168.255.68.42',
            'remote_address' => 'http://olson.com/app/search/categories/privacy.php',
            'path' => 'tag/search',
            'query_string' => '?UNION SELECT',
            'message' => 'Special hope glass process meeting store recent increase car represent project particularly decision black audience Democrat whether free account pretty role mother race break too.',
            'severity' => 'High',
            'type' => 'Permission Changed',
            'user_account' => 'brittany73@wu-kidd.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 4_2_1 like Mac OS X) AppleWebKit/532.1 (KHTML, like Gecko) FxiOS/9.2j0559.0 Mobile/12G711 Safari/532.1',
            'user_agent' => 'Which dream item.',
            'success' => False,
            'app' => 'App2',
            'source' => 'Firm seat.',
            'stack' => 'East show state change rock.',
            'exception' => 'Send beyond there almost sport join community amount me conference art wait protect truth public evidence a relate teach tonight doctor contain price bank knowledge kitchen quality maybe partner tell newspaper truth foreign million them compare indeed bad.',
            'detail' => 'Bar region main carry present real whole right from participant voice tree bed surface chair military opportunity research heart cover shoulder political heart play win another land move expert realize sing decade while fund research single executive science while situation tough language skill affect eight positive quality trip suffer room weight meeting protect cut yes night into capital admit east develop arrive support threat war information wear range during market last wait message start exactly moment away bill candidate play use say.',
            'app_version' => '5.6.17',
            'request_headers' => '
    GET /home.html HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Though issue change like social lawyer investment worry positive who forget option series stock education involve statement base well within pattern great participant painting man instead father often why dog most board single practice discuss newspaper pull very create country network behavior one collection government environment cover where itself somebody program money smile these lay be your our everybody stock animal campaign edge than article would social want easy tax fast lay sister region sort TV way include end right information determine while line.'
        ]);


        AuditLog::create([
            'host' => '134.154.47.7',
            'referrer' => '42.11.229.78',
            'remote_address' => 'http://www.davis.biz/',
            'path' => 'wp-content',
            'query_string' => '?bar=foo',
            'message' => 'Leg money toward six improve begin onto by give policy as degree hospital behind tree only like move property capital edge while soon factor officer.',
            'severity' => 'High',
            'type' => 'User Login',
            'user_account' => 'christopher38@brooks-white.biz',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1; rv:1.9.2.20) Gecko/2020-03-05 22:03:57 Firefox/3.8',
            'user_agent' => 'Quickly generation.',
            'success' => False,
            'app' => 'App3',
            'source' => 'End.',
            'stack' => 'Piece happen so reality parent.',
            'exception' => 'Current strategy at music sense will trial stage support wind though college understand enjoy cold big attack statement seek worry sure party poor skin mean position these professional between early president only according public lay recent machine consumer tax fund you head account page stay price movement determine less.',
            'detail' => 'Early leader within example whether talk military area pull accept should expert available parent today have father late method skin adult research example personal fact child wife seem race wait rate door follow true nature vote mission goal yet treat yeah fact small particularly value campaign here among night career television administration factor magazine tax form statement out painting also each from ok.',
            'app_version' => '1.8.12',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Trouble member book site get character possible factor space knowledge will side community expert two mean figure respond time out hold score down land reveal feel team many let else gas there staff street buy cause laugh population Mrs forward you experience eight activity glass Mrs operation hundred section along floor.'
        ]);


        AuditLog::create([
            'host' => '150.126.6.102',
            'referrer' => '142.192.121.52',
            'remote_address' => 'https://keller.com/category/search/posts/login.html',
            'path' => 'main',
            'query_string' => '?UNION SELECT',
            'message' => 'Receive modern room its role go stock she gas add above real ten subject a store put to simply program power rate state eat fine.',
            'severity' => 'Medium',
            'type' => 'Invalid Login Attempt',
            'user_account' => 'glucero@baker-murray.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_11_8; rv:1.9.6.20) Gecko/2018-11-06 20:11:55 Firefox/3.8',
            'user_agent' => 'Name place rich.',
            'success' => True,
            'app' => 'App3',
            'source' => 'And their.',
            'stack' => 'Bar carry anyone rock huge shoulder.',
            'exception' => 'Fine tree cultural than six lot nothing power official maybe his already cost dream example realize parent thank share soon here fear similar reach.',
            'detail' => 'Evening improve expert according tree bring positive movement heart true huge eat popular course impact figure can eye ask performance free ago explain gas minute management coach music bring hotel compare work coach play significant town ago recognize quality great power cut high such project glass stock woman single name professional toward similar yes enough management.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Kid cost lawyer Mrs drop record race life parent participant business book hope significant garden doctor your here south game rest face arm change go make throw way manage amount good herself together that various save top director difficult treatment beat compare point now fall.'
        ]);


        AuditLog::create([
            'host' => '148.30.24.165',
            'referrer' => '53.53.55.126',
            'remote_address' => 'https://atkinson.info/about/',
            'path' => 'tags/app/tags',
            'query_string' => '?foo=bar',
            'message' => 'Pull until carry he shoulder number prove suddenly sound throughout somebody game south available sense author price statement resource move reduce sit want share arm.',
            'severity' => 'Medium',
            'type' => 'Permission Changed',
            'user_account' => 'jasmine63@williams.com',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (Android 4.1.1; Mobile; rv:7.0) Gecko/7.0 Firefox/7.0',
            'user_agent' => 'Under degree season.',
            'success' => True,
            'app' => 'App2',
            'source' => 'Dinner.',
            'stack' => 'Address final behind save.',
            'exception' => 'Article know on any coach eye get federal could event hand see opportunity magazine individual another score man few I certain task author necessary analysis even prepare particular subject create court treatment trouble research keep matter pass war method growth thing outside option win large large what late board.',
            'detail' => 'Success out ready professional when garden central Congress data watch true spring play exactly game simply response eye their always sometimes nothing capital drug price yeah get project difficult evening simple marriage various player reach thus single see central fact answer yes appear stand man paper suddenly summer value soon.',
            'app_version' => '5.6.17',
            'request_headers' => '
    POST /echo/post/form HTTP/1.1
    Host: reqbin.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 23

    key1=&lt;script&gt;sleep()&lt;/script&gt;&key2=value2
    ',
            'response_headers' => 'Plant carry create need claim knowledge but set seven trip know person concern high operation determine price little provide himself expect option much design so Democrat decision include item until method let show name save company bit wrong body trip on accept something born number say officer always bank bar bad example think simple join treat professional increase ok indeed girl oil claim boy dinner stop strong he yeah property budget ago everyone animal as available here side cut.'
        ]);


        AuditLog::create([
            'host' => '140.43.19.161',
            'referrer' => '163.255.230.250',
            'remote_address' => 'http://www.walker-thompson.net/',
            'path' => 'category/category/categories',
            'query_string' => '?id=10 AND IF(version() like \'5%\', sleep(10), \'false\'))',
            'message' => 'Likely either what next toward heart budget activity father response chair she organization.',
            'severity' => 'Low',
            'type' => 'Automated Job Executed',
            'user_account' => 'djimenez@smith-warren.org',
            'event_date' => date("r"),
            'browser_version' => 'Mozilla/5.0 (iPad; CPU iPad OS 14_2_1 like Mac OS X) AppleWebKit/532.2 (KHTML, like Gecko) FxiOS/16.4o6426.0 Mobile/66T275 Safari/532.2',
            'user_agent' => 'Parent grow lay.',
            'success' => False,
            'app' => 'App2',
            'source' => 'After.',
            'stack' => 'Common begin ahead price only.',
            'exception' => 'Risk set know Mr citizen thus his himself material figure know song community policy soldier song throughout management lead describe avoid whatever hotel school management avoid true scientist lawyer decade be series yes magazine treatment chance source lose deal debate center voice national stage he all.',
            'detail' => 'He its suddenly fight same go wait piece you black near however ready human history art project lead during eat through either night involve vote send nor end specific might past fight poor none buy edge instead Republican forward some behavior enter clearly information seven hour positive ever help arm full page real in another let provide base see during voice follow he news improve community break born beat day which vote would if area sing TV.',
            'app_version' => '1.1.13',
            'request_headers' => '
    POST /home.html?1=1 HTTP/1.1
    Host: developer.mozilla.org
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:50.0) Gecko/20100101 Firefox/50.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: en-US,en;q=0.5
    Accept-Encoding: gzip, deflate, br
    Referer: https://developer.mozilla.org/testpage.html
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
    If-Modified-Since: Mon, 18 Jul 2016 02:36:04 GMT
    If-None-Match: "c561c68d0ba92bbeb8b0fff2a9199f722e3a621a"
    Cache-Control: max-age=0
    ',
            'response_headers' => 'Red hard to not reduce key reality tell degree artist situation office condition do color own forget model final research meet include west draw particularly now above should never TV several front senior structure itself per door of treat several gun Mrs support together protect decide throw tend paper future kind audience always girl meet share particular make security condition fine hour newspaper no your your center girl throw describe third book name growth car discover notice need.'
        ]);


    }
}
