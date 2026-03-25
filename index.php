<?php
error_reporting(0);

$API_KEY = "8523939636:AAESy_2Ndbu1Sp6LgtrReoL5INWwBQy38DM" ;
$admin = 8313661137;

define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);


function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $options = [
        'http' => [
            'method'  => 'POST',
            'content' => http_build_query($datas),
            'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n',
        ],
    ];
    $context  = stream_context_create($options);
    $res = file_get_contents($url, false, $context);

    if ($res === FALSE) {
        return json_encode(['error' => 'Request failed']);
    } else {
        return json_decode($res);
    }
}

// إنشاء المجلدات إذا لم تكن موجودة
if (!is_dir("UploadEr")) mkdir("UploadEr");
if (!is_dir("Host")) mkdir("Host");
if (!is_dir("BEDO")) mkdir("BEDO");
if (!is_dir("sudo")) mkdir("sudo");

// إنشاء الملفات الأساسية إذا لم تكن موجودة
if (!file_exists("UploadEr/UploadEr.json")) file_put_contents("UploadEr/UploadEr.json", json_encode([]));
if (!file_exists("Host/Host.json")) file_put_contents("Host/Host.json", json_encode(["info"=>[]]));
if (!file_exists("BEDO/arslan.json")) file_put_contents("BEDO/arslan.json", "");
if (!file_exists("BEDO/arslan09.json")) file_put_contents("BEDO/arslan09.json", json_encode(["sudoarr"=>[],"addmessage"=>0,"messagee"=>0]));
if (!file_exists("sudo/ban.txt")) file_put_contents("sudo/ban.txt", "");
if (!file_exists("sudo/member.txt")) file_put_contents("sudo/member.txt", "");
if (!file_exists("mem.txt")) file_put_contents("mem.txt", "");
if (!file_exists("madey.json")) file_put_contents("madey.json", json_encode(["bot"=>"on"]));
if (!file_exists("sudo.json")) file_put_contents("sudo.json", json_encode(["info"=>["amr"=>"null","fwrmember"=>0,"tnbih"=>0,"silk"=>0,"allch"=>0]]));
if (!file_exists("AMR.txt")) file_put_contents("AMR.txt", "");
if (!file_exists("AMR0.txt")) file_put_contents("AMR0.txt", "");
if (!file_exists("AMR1.txt")) file_put_contents("AMR1.txt", "");
if (!file_exists("AMR2.txt")) file_put_contents("AMR2.txt", "");
if (!file_exists("AMR3.txt")) file_put_contents("AMR3.txt", "");
if (!file_exists("AMR4.txt")) file_put_contents("AMR4.txt", "");

// التحقق من وجود تحديث من تيليغرام
$rawInput = file_get_contents('php://input');
if (empty($rawInput)) {
    echo "تم تشغيل البوت ✅";
    exit;
}
$updateCheck = json_decode($rawInput);
if (!$updateCheck || (!isset($updateCheck->message) && !isset($updateCheck->callback_query))) {
    echo "تم تشغيل البوت ✅";
    exit;
}

$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

if (!defined("USR_BOT")) define("USR_BOT", $usrbot);

function SETJSON($INPUT)
{
    if ($INPUT != NULL || $INPUT != "") {
        $F = "UploadEr/UploadEr.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);

        file_put_contents($F, $N);
    }
}
$update = json_decode($rawInput);
$message = $update->message ?? null;
$chat_id2 = $update->callback_query->message->chat->id ?? null;
$message_id2 = $update->callback_query->message->message_id ?? null;
$data = $update->callback_query->data ?? null;
$id = $message->from->id ?? null;
$text = $message->text ?? null;
$chat_id = $message->chat->id ?? null;
$user = $message->from->username ?? null;
$name = $update->message->from->first_name ?? null;
$from_id = $update->message->from->id ?? null;
####لوحة الادمن###
$admin = "8313661137"; ###ايديك###
$sudo = array("8313661137","8313661137","8313661137");
$AMR = file_get_contents("AMR.txt") ?: "";
$AMR0 = file_get_contents("AMR0.txt") ?: "";
$AMR1 = file_get_contents("AMR1.txt") ?: "";
$AMR5 = file_get_contents("AMR2.txt") ?: "";
$AMR6 = file_get_contents("AMR3.txt") ?: "";
$AMR20 = $update;
$AMR18 = $update->message ?? null;
$AMR13 = $AMR18->chat->id ?? null;
$AMR17 = $AMR18->text ?? null;
$AMRD = $AMR20->callback_query->data ?? null;
$AMR12 = $AMR20->callback_query->message->chat->id ?? null;
$AMR14 = $AMR20->callback_query->message->message_id ?? null;
$AMR15 = $AMR18->from->first_name ?? null;
$AMR16 = $AMR18->from->username ?? null;
$AMR11 = $AMR18->from->id ?? null;
$AMR2 = explode("\n", file_get_contents("AMR4.txt") ?: "");
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'- ▫️ عذراً عزيزي  ،♣
▪️ يجب عليك الإشتراك في قناة المطور جيزاوي أولاً ⚜️؛

- اشترك ثم ارسل { /start }★

'.$AMR0.'
'.$AMR1,
]);return false;}
if($text == "/start" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
}
if($AMRD == "AMR" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 √
قناة ² => $AMR1 √
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}
#@amrakl
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}
if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات  💛
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ

 عدد مشتركين البوت  [ $AMR3 ]

حاله سرعه البوت -: 100%
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
}

$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}
//تخزينات الاذاعة//
//تخزينات الاذاعة//
$message= $update->message ?? null;
$text = $message->text ?? null;
$chat_id= $message->chat->id ?? null;
$name = $message->from->first_name ?? null;
$user = $message->from->username ?? null;
$message_id = $update->message->message_id ?? null;
$from_id = $update->message->from->id ?? null;
$a = strtolower($text ?? "");
$message = $update->message ?? null;
$chat_id = $message->chat->id ?? null;
$text = $message->text ?? null;
$chat_id2 = $update->callback_query->message->chat->id ?? null;
$message_id = $update->callback_query->message->message_id ?? ($update->message->message_id ?? null);
$data = $update->callback_query->data ?? null;
$from_id = $message->from->id ?? null;
$msg = file_exists("msg.php") ? file_get_contents("msg.php") : "";

$users = explode("\n",file_get_contents("BEDO/arslan.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("BEDO/arslan.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$arslan09 = json_decode(file_get_contents("BEDO/arslan09.json"),true);
$suodo = $arslan09['sudoarr'];
$al = $arslan09['addmessage'];
$ab = $arslan09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$arslan09['messagee'] = $arslan09['messagee']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}
if($message and $from_id == $admin){
$arslan09['addmessage'] = $arslan09['addmessage']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}

$all = count($users)-1;
//---------------------------//

//بداية كود الحظر//
$sudo = array("6343839778");

$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);

if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• لقد تم حظرك من البوت ❌
",
]);return false;}

$reply = $message->reply_to_message->message_id ?? null;
$rep = $message->reply_to_message->forward_from ?? null;

if($countban<=0){
$countban="لايوجد محظورين";
}
function sendwataw($chat_id,$message_id){

$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}
}

@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];
if($data == "start"){
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
}

$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

if (!defined("USR_BOT")) define("USR_BOT", $usrbot);


$update = json_decode($rawInput);

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username ?? null;
    $chat_id = $message->chat->id;
    $title = $message->chat->title ?? null;
    $text = $message->text ?? null;
    $user = $message->from->username ?? null;
    $name = $message->from->first_name ?? null;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true) ?: [];

if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title ?? null;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name ?? null;
    $user = $update->callback_query->message->chat->username ?? null;
    $from_id = $update->callback_query->from->id;
}

$Host = json_decode(file_get_contents("Host/Host.json"), true) ?: [];

//——————————————————//
$MTAWR = "E60gr";  //معرفك
$admin = "hgdthgcgfdfgffggfhdfhg";  //ايديك//
//——————————————————//

//خزن الاشتراك//
if($Host['hui'] == null) {
$hui ="لا يوجد";
}else{
$hui = $Host['hui'];
}

//دخول الاعضاء//
$mem = explode("\n",file_get_contents("mem.txt"));
$je = file_get_contents("mem.txt");
$count = explode("\n",$je);
$SAl = count($count) -1;
if($username != null){
$sf = "@$username";
}else
if($username == null){
$sf = "لا يوجد معرف";
}
if($message and !in_array($from_id,$mem)){
file_put_contents("mem.txt",$from_id . "\n" ,FILE_APPEND);
$SAl = $SAl + 1;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تم دخول شخص جديد الى البوت 💀*
    •–––––––––––––––––––––––––––––––•

• معلومات الشخص 📜 :

- الاسم : [$name](tg://user?id=$from_id)
- المعرف : $sf
- الايدي : [$from_id](tg://user?id=$from_id)

    •–––––––––––––––––––––––––––––––•
• عدد الاعضاء الكلي :* $SAl 📊*
",
'parse_mode'=>"Markdown",
]);
}

//تشغيل وايقاف البوت//
$madey = json_decode(file_get_contents("madey.json"),true);
if(!$madey['bot']){
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($madey['bot'] == "on"){
$xm = "البوت يعمل ✅️";
}else{
$xm = "البوت متوقف ❌️";
}
if($message and $madey['bot'] == "off" and $from_id != $admin){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• البوت تحت الصيانة او هناك عطل في النظام سوف يتم العمل عل ذالك في اسرع وقت ممكن شكرا عل صبرك 🛠 •
",
'parse_mode'=>'markdown',
]);return false;
}
if($data == "on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم تشغيل البوت بنجاح ✅️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($data == "off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم ايقاف
