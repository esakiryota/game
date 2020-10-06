<?php

use Illuminate\Database\Seeder;

class EnglishwordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('englishword')->insert(['english' => "January",'japanese' => "1月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "February",'japanese' => "2月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "March",'japanese' => "3月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "April",'japanese' => "4月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "May",'japanese' => "5月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "June",'japanese' => "6月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "July",'japanese' => "7月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "August",'japanese' => "8月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "September",'japanese' => "9月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "October",'japanese' => "10月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "November",'japanese' => "11月",'level' => "1-1"]);
      DB::table('englishword')->insert(['english' => "December",'japanese' => "12月",'level' => "1-1"]);

      DB::table('englishword')->insert(['english' => "Monday",'japanese' => "月曜日",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "Tuesday",'japanese' => "火曜日",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "Wednesday",'japanese' => "水曜日",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "Thursday",'japanese' => "木曜日",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "Friday",'japanese' => "金曜日",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "Saturday",'japanese' => "土曜日",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "Sunday",'japanese' => "日曜日",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "spring",'japanese' => "春",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "summer",'japanese' => "夏",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "fall",'japanese' => "秋",'level' => "1-2"]);
      DB::table('englishword')->insert(['english' => "winter",'japanese' => "冬",'level' => "1-2"]);

      DB::table('englishword')->insert(['english' => "morning",'japanese' => "午前・朝",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "afternoon",'japanese' => "午後",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "evening",'japanese' => "夕方",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "night",'japanese' => "夜",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "year",'japanese' => "年",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "month",'japanese' => "月",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "day",'japanese' => "日",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "week",'japanese' => "週",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "time",'japanese' => "時間・時",'level' => "1-3"]);
      DB::table('englishword')->insert(['english' => "minute",'japanese' => "分",'level' => "1-3"]);

      DB::table('englishword')->insert(['english' => "family",'japanese' => "家族",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "father",'japanese' => "父",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "mother",'japanese' => "母",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "brother",'japanese' => "兄・弟",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "sister",'japanese' => "姉・妹",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "animal",'japanese' => "動物",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "dog",'japanese' => "犬",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "cat",'japanese' => "猫",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "breakfast",'japanese' => "朝食・朝ごはん",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "lunch",'japanese' => "昼食・昼ごはん",'level' => "1-4"]);
      DB::table('englishword')->insert(['english' => "dinner",'japanese' => "夕食・晩ごはん",'level' => "1-4"]);

      DB::table('englishword')->insert(['english' => "house",'japanese' => "家",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "kitchen",'japanese' => "台所",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "window",'japanese' => "窓",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "room",'japanese' => "部屋",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "computer",'japanese' => "コンピューター",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "desk",'japanese' => "机",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "table",'japanese' => "テーブル",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "chair",'japanese' => "いす",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "door",'japanese' => "ドア",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "bed",'japanese' => "ベッド",'level' => "1-5"]);
      DB::table('englishword')->insert(['english' => "garden",'japanese' => "庭",'level' => "1-5"]);

      DB::table('englishword')->insert(['english' => "car",'japanese' => "車",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "bike",'japanese' => "自転車",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "train",'japanese' => "列車・電車",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "bus",'japanese' => "バス",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "sport",'japanese' => "スポーツ",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "baseball",'japanese' => "野球",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "ball",'japanese' => "ボール",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "basketball",'japanese' => "バスケットボール",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "soccer",'japanese' => "サッカー",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "tennis",'japanese' => "テニス",'level' => "1-6"]);
      DB::table('englishword')->insert(['english' => "swimming",'japanese' => "水泳",'level' => "1-6"]);

      DB::table('englishword')->insert(['english' => "music",'japanese' => "音楽",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "piano",'japanese' => "ピアノ",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "guitar",'japanese' => "ギター",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "organ",'japanese' => "オルガン",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "apple",'japanese' => "リンゴ",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "orange",'japanese' => "オレンジ",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "egg",'japanese' => "卵",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "grape",'japanese' => "ブドウ",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "country",'japanese' => "国",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "America",'japanese' => "アメリカ合衆国",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "Australia",'japanese' => "オーストラリア",'level' => "1-7"]);
      DB::table('englishword')->insert(['english' => "Japan",'japanese' => "日本",'level' => "1-7"]);

      DB::table('englishword')->insert(['english' => "bag",'japanese' => "かばん",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "camera",'japanese' => "カメラ",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "cap",'japanese' => "帽子",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "notebook",'japanese' => "ノート",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "pen",'japanese' => "ペン",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "picture",'japanese' => "絵・写真",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "tree",'japanese' => "木",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "birthday",'japanese' => "誕生日",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "town",'japanese' => "町",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "city",'japanese' => "市・都市",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "park",'japanese' => "公園",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "people",'japanese' => "人々",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "friend",'japanese' => "友人",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "woman",'japanese' => "女性",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "man",'japanese' => "男性",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "school",'japanese' => "学校",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "class",'japanese' => "クラス・授業",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "teacher",'japanese' => "先生",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "student",'japanese' => "生徒",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "math",'japanese' => "数学",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "Japanese",'japanese' => "日本語",'level' => "1-8"]);
      DB::table('englishword')->insert(['english' => "English",'japanese' => "英語",'level' => "1-8"]);
    }
}
