<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>今スグやめたい家事アンケート</title>
</head>

<body>
  <h1>今スグやめたい家事アンケート</h1>
  <form action="todo_txt_create.php" method="POST">
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        <p>性別</p>
          <input type="radio" name="gender" id="male" value="男性">
          <label for="male"> 男性 </label>
          <input type="radio" name="gender" id="female"  value="女性">
          <label for="female"> 女性 </label>
      </div>
      <div>
          <label for="age"> 年齢 </label>
          <select name="age" id="age">
            <option value="0" selected>選択してください。</option>
            <?php
            $ages = array('10代','20代','30代','40代','50代','60代','70代','80代以降');
            foreach($ages as $key => $value) {
              if($age) {
                if($age == $key){
                  echo '<option value="'. $key . '" selected>'. $value . '</option>' . "\n";
                }else{
                  echo '<option value="'. $key . '">'. $value . '</option>' . "\n";
                }
              }else{
                  echo '<option value="'. $key . '">'. $value . '</option>' . "\n";
              }
            }
            ?>
          </select>
      <div>
        <p>やめたい家事</p>
            <input type="checkbox" name="job" value="整理整頓">整理整頓<br/>
            <input type="checkbox" name="job" value="掃除">掃除<br/>
            <input type="checkbox" name="job" value="料理">料理<br/>
            <input type="checkbox" name="job" value="食後の後片付け">食後の後片付け<br/>
            <input type="checkbox" name="job" value="洗濯">洗濯<br/>
            <input type="checkbox" name="job" value="資源ごみの仕分け">資源ごみの仕分け<br/>
            <input type="checkbox" name="job" value="食材・日用品の買い物">食材・日用品の買い物<br/>
      </div>
      <div>
            やめたい理由<input type="text" name="reason">
      </div>
      <div>
        <button>submit</button>
      </div>

  </form>
</body>

</html>