<?php    echo 123,'<br>';    print 222;    print'<br>';;    //$a = echo(123);//echo не возврощает результат//    $b = print(555);//возврощает результат//    var_dump($b);//результат возврата 1;//.    echo '<hr>';    $name = 'Serghey';    echo 'Hello \n My name is $name', '<br>'; // '' выводят все как простой текст.    echo "Hello \n My name is $name", '<br>'; // "" вводят и переменые.    echo '<hr>';    //Ввывод NavDoc  и Heredoc    //navdoc c '' не понимает переменые    $js = <<<'JS'    document.addEventListener('DOMContentLoaded', function () {    alert('$name');    });    JS;//heredoc c без '' понимает переменые//    $html = <<<HTML    <h1>Test text</h1>    <p>Username is $name</p>    <script>$js</script>    HTML;    echo $html;// пример SQL    $sql = <<<SQL        SELECT            *        FROM user        INNER JOIN contacts ON contacts.user.id = user.id        WHERE users.id =1    SQL;