<?php
/*
Template Name: dashboard
*/
?>
<!DOCTYPE html>

<html>
  <head>
    <?php get_header('meta') ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/dashboard/dashboard.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/jquery.noty.packaged.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/ZeroClipboard.min.js"></script>
  </head>
  <body id="dashboard">
    <div class="container">
      <div class="main" role="tabpanel">

<!--===============================================================================================
                                          ヘッダー
================================================================================================-->

        <section class="header">
          <h1>UNITUS</h1>
          <div class="dropdown">
            <div id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Junpei Taneichi
              <span class="caret"></span>
            </div>
            <ul class="dropdown-menu" role="menu" aria-labelledby="account">
              <!--  (管理者用ここから) -->
              <li class="author menu">管理者メニュー</li>
              <li class="item" data-js="open_admin">管理画面を開く</li>
              <li class="divider"></li>
              <!--  (管理者用ここまで) -->
              <li class="author menu">アカウントメニュー</li>
              <li class="item">設定</li>
              <li class="divider"></li>
              <li class="item" data-js="logout">ログアウト</li>
              <li class="divider"></li>
            </ul>
          </div>
        </section>

  <!--===============================================================================================
                                            一般ユーザー
  ================================================================================================-->
        <div id="basic_user">
          <!--========================================================================
          |                            一般ユーザー  >  サイドバー                        |
          =========================================================================-->
          <section class="sidebar">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#circles" aria-controls="circles" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-th"></i><span class="title">加盟団体一覧</span></a></li>
              <li role="presentation"><a href="#mail" aria-controls="mail" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-envelope"></i><span class="title">部員招待</span></a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i><span class="title">プロフィール</span></a></li>
            </ul>
          </section>

          <!--========================================================================
          |                            一般ユーザー  >  コンテンツ                        |
          =========================================================================-->
          <section class="user_content content">
            <div class="tab-content">

              <!--============================================================
              |            一般ユーザー >  コンテンツ  >  サークル一覧               |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade in active" id="circles">
                <h1>加盟団体一覧</h1>
                <table>
                  <thead>
                    <tr>
                      <th class="name_w">名前</th>
                      <th class="author_w">権限</th>
                      <th class="number_w">人数</th>
                      <th class="university_w">大学名</th>
                      <th class="update_w">更新日</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="self">
                      <td class="name name_w">応用数学研究部<a href="#1"><i class="glyphicon glyphicon-edit"></i></a></td>
                      <td class="author author_w">編集者</td>
                      <td class="number number_w">28</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年2月1日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">EspicaCompute<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">44</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年2月1日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">神楽坂一丁目通信局<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">28</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年2月9日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">TUSCOM<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">8</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2014年3月1日</td>
                    </tr>
                    <tr>
                      <td class="name name_w">ITC<a href="#1"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                      <td class="author author_w">閲覧者</td>
                      <td class="number number_w">128</td>
                      <td class="university university_w">東京理科大学</td>
                      <td class="update update_w">2015年2月1日</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!--============================================================
              |            一般ユーザー >  コンテンツ  >  メンバー招待                |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade" id="mail">
                <h1>メンバー招待</h1>
                <p>このページでは、自分が権限を与えられているサークルないし部活のメンバーを招待することが出来ます。</p>
                <form>
                  <div class="form-group">
                    <label for="circle_name">団体名</label>
                    <input type="text" class="form-control" id="circle_name" placeholder="応用数学研究部">
                    <label for="circle_description">団体説明</label>
                    <textarea class="form-control" id="circle_description" placeholder="団体説明を記入" rows="10"></textarea>
                    <label for="circle_num">人数</label>
                    <input type="text" class="form-control" id="circle_num" placeholder="18">
                    <label for="site_name">ウェブサイト</label>
                    <input type="text" class="form-control" id="site_name" placeholder="http://unitus-ac.com">
                    <label for="university">所属大学</label>
                    <input type="text" class="form-control" id="university" placeholder="東京理科大学">
                    <label for="remarks">備考</label>
                    <textarea class="form-control" id="remarks" placeholder="インカレサークルです。"></textarea>
                    <label for="contact">連絡先</label>
                    <input type="text" class="form-control" id="contact" placeholder="Tel: 090123456">
                    <label for="leader">代表者</label>
                    <input type="text" class="form-control" id="leader" placeholder="@hogehoge">
                    <div class="checkbox">
                      <label>
                        <input id="isAcceptOutside" type="checkbox"> 外部生のサークル加入可否
                      </label>
                    </div>
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary">保存する</button>
                    </div>
                  </div>
                </form>
              </div>

              <!--============================================================
              |            一般ユーザー >  コンテンツ  >  プロフィール               |
              =============================================================-->
              <!-- Profile tab -->
              <div role="tabpanel" class="tab-pane fade" id="profile">
                <h1>プロフィール</h1>
                <div class="content">
                  <div class="row">
                    <div class="col-xs-3">
                      <img class="profile_image" src="<?php bloginfo("stylesheet_directory") ?>/img/profile.png" alt="...">
                      <h1 class="profile_name">種市 隼兵</h1>
                      <h2 class="profile_id">@gamerinshaft</h2>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>
        </div>
  <!--===============================================================================================
                                              管理者用
  ================================================================================================-->
        <div id="administrator" class="hidden_panel">
          <!--========================================================================
          |                             管理者用  >  サイドバー                          |
          =========================================================================-->
          <section class="sidebar">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#admin_new_circle" aria-controls="admin_new_circle" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i><span class="title">新規団体追加</span></a></li>
              <li role="presentation"><a href="#admin_userList" aria-controls="admin_userList" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i><span class="title">ユーザー一覧</span></a></li>
            </ul>
          </section>

          <!--========================================================================
          |                               管理者用  >  コンテンツ                        |
          =========================================================================-->
          <section class="content admin_content">
            <div class="tab-content">

              <!--============================================================
              |               管理者用 >  コンテンツ  >  団体作成                  |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade in active" id="admin_new_circle">
                <h1>新規団体追加<div class="label label-default" data-js="markdown">プレビュー</div></h1>
                <form>
                  <div class="form-group">
                    <label for="circle_name">団体名</label>
                    <input type="text" class="form-control" id="circle_name" placeholder="応用数学研究部">
                    <label for="circle_description">団体説明</label>
                    <textarea class="form-control" id="circle_description" placeholder="団体説明を記入" rows="10"></textarea>
                    <label for="circle_num">人数</label>
                    <input type="text" class="form-control" id="circle_num" placeholder="18">
                    <label for="site_name">ウェブサイト</label>
                    <input type="text" class="form-control" id="site_name" placeholder="http://unitus-ac.com">
                    <label for="university">所属大学</label>
                    <input type="text" class="form-control" id="university" placeholder="東京理科大学">
                    <label for="remarks">備考</label>
                    <textarea class="form-control" id="remarks" placeholder="インカレサークルです。"></textarea>
                    <label for="contact">連絡先</label>
                    <input type="text" class="form-control" id="contact" placeholder="Tel: 090123456">
                    <label for="leader">代表者</label>
                    <input type="text" class="form-control" id="leader" placeholder="@hogehoge">
                    <div class="checkbox">
                      <label>
                        <input id="isAcceptOutside" type="checkbox"> 外部生のサークル加入可否
                      </label>
                    </div>
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary">保存する</button>
                    </div>
                  </div>
                </form>
              </div>
              <!--============================================================
              |               管理者用 >  コンテンツ  >  メール管理                |
              =============================================================-->
              <div role="tabpanel" class="tab-pane fade" id="admin_userList">
                <h1>ユーザー一覧</h1>
                <table>
                  <thead>
                    <tr>
                      <th class="name_w">名前</th>
                      <th class="author_w">権限</th>
                      <th class="number_w">学年</th>
                      <th class="university_w">所属大学</th>
                      <th class="mail_w">メールアドレス</th>
                    </tr>
                  </thead>
                  <tbody data-js="userList">
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="optionbar">
            <div class="close_btn" data-js="close_admin">
              <div class="glyphicon glyphicon-remove"></div>
            </div>
          </section>

        </div>
      </div>
    </div>
<!--===============================================================================================
                                    マークダウンモーダル
================================================================================================-->

    <!-- markdownModal -->
    <div class="modal fade" id="markdownModal" tabindex="-1" role="dialog" aria-labelledby="markdownModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="markdownModalLabel">プレビュー</h4>
          </div>
          <div class="modal-body">
            <div id="circle_single">
              <section class="section section--top" data-js="sectionTop" style="background-image: url(http://unitus.azurewebsites.net/wp-content/uploads/2015/02/math-algorithm.jpg);">
              <div class="smoke">
              </div>
              <div class="container">
                <h1>応用数学研究部</h1>
                <div class="top__thumbnail" style="background-image: url('http://unitus-ac.com/wp-content/uploads/2015/02/imgteaser_cdon-276x300.png');">
                </div>
              </div>
              </section>
              <section class="section section--postcontent">
              <div class="container">
                <p>
                  <a data-js="back-image" href="http://unitus.azurewebsites.net/wp-content/uploads/2015/02/math-algorithm.jpg"></a>
                </p>
                <h1>団体説明</h1>
                <p>
                  東京理科大学応用数学研究部は、創立半世紀を超える歴史のある部活です。古くは応用数学を深く研究する部活ではありましたが、今ではコンピュータープログラミングをメインとする部活になっています。<br>
                   主な活動は、新入生やプログラミング初心者に対するプログラミング講習、特にC言語C++言語を用いた講習をメインに行っています。<br>
                   また、応用数学という名前でもあるということで、習熟度の高い部員はより高度な数学を必要とする分野(機械学習やコンピュータグラフィクス)のゼミをしたりしてお互いにスキルを高めあうように努力しています。
                </p>
                <h1>団体基本情報</h1>
                <blockquote>
                  <h1>メンバー数</h1>
                  <p>
                    <strong><em>28</em>人</strong>
                  </p>
                  <blockquote>
                    <i class="glyphicon glyphicon-user "></i>
                  </blockquote>
                </blockquote>
                <hr>
                <blockquote>
                  <h1>関与プロジェクト</h1>
                  <p>
                    <a href="https://mmflex.codeplex.com/">MikuMikuFlex(MMF)</a><br>
                    <a href="http://mmw-project.com/">MikuMikuWallpaper(MMW)</a><br>
                    <a href="https://github.com/LimeStreem/MagicalFPS">Magical-Bullet</a><br>
                    <a href="https://bitbucket.org/moajo/brakeblock">VRブロック崩し</a><br>
                    <a href="http://apps.microsoft.com/windows/ja-jp/app/timetableone/ff30f6b7-0886-4c42-b062-1b2da1950a3c">TimeTableOne(Asteroid)</a><br>
                    <a href="https://github.com/LimeStreem/MagicalFPS">beep(部内起業試行団体)</a><br>
                     その他ゲーム作成プロジェクト多数
                  </p>
                  <blockquote>
                    <i class="glyphicon glyphicon-wrench "></i>
                  </blockquote>
                </blockquote>
                <hr>
                <blockquote>
                  <h1>コンタクト</h1>
                  <p>
                     代表: os_ken@ed.kagu.tus.ac.jp
                  </p>
                  <blockquote>
                    <i class="glyphicon glyphicon-envelope "></i>
                  </blockquote>
                </blockquote>
                <hr>
                <blockquote>
                  <h1>備考</h1>
                  <blockquote>
                    <i class="glyphicon glyphicon-comment "></i>
                  </blockquote>
                </blockquote>
                <hr>
                <blockquote>
                  <h1>サークルリンク</h1>
                  <p>
                    <a href="http://osk-web.appspot.com/">応用数研究部</a>
                  </p>
                  <blockquote>
                    <i class="glyphicon glyphicon-paperclip "></i>
                  </blockquote>
                </blockquote>
                <hr>
                <blockquote>
                  <h1>実績</h1>
                  <p>
                    <a href="http://mwccjp.wix.com/mscc-online#!untitled/cglk">MSCC online review 優勝</a><br>
                     出展各種<br>
                     (HCD,花楽カフェ、理大祭)
                  </p>
                  <blockquote>
                    <i class="glyphicon glyphicon-stats "></i>
                  </blockquote>
                </blockquote>
                <h1>活動場所</h1>
                <p>
                  東京理科大学神楽坂キャンパスの教室
                </p>
                <p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3240.0900328936!2d139.74139599999998!3d35.69940199999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c5b5bb5cf6b%3A0xd1f5e24e18af51e!2z5p2x5Lqs55CG56eR5aSn5a2mIOelnualveWdguOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1422829059010" width="600" height="450" frameborder="0" style="border:0">
                  </iframe>
                </p>
              </div>
              </section>
              <footer class="footer">
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="footer-content-right">
                  </div>
                  <div id="fb-root" class=" fb_reset">
                    <div class="face_book_plgin_shadow_hidden">
                    </div>
                    <section class="face_book_plgin_proposal_1">
                    <div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/pages/Unitus/308318549371947" data-width="490" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=569860876447312&amp;color_scheme=light&amp;container_width=668&amp;header=false&amp;height=200&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FUnitus%2F308318549371947&amp;locale=ja_JP&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=490">
                      <span style="vertical-align: bottom; width: 490px; height: 200px;">
                      <iframe name="ff22b8cc" width="490px" height="200px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like_box.php?app_id=569860876447312&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FDU1Ia251o0y.js%3Fversion%3D41%23cb%3Df3d830eb34%26domain%3Dunitus-ac.com%26origin%3Dhttp%253A%252F%252Funitus-ac.com%252Ff2b84464d8%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=668&amp;header=false&amp;height=200&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FUnitus%2F308318549371947&amp;locale=ja_JP&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=490" style="border: none; visibility: visible; width: 490px; height: 200px;" class="">
                      </iframe>
                      </span>
                    </div>
                    </section>
                    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                      <div>
                        <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://static.ak.facebook.com/connect/xd_arbiter/DU1Ia251o0y.js?version=41#channel=f2b84464d8&amp;origin=http%3A%2F%2Funitus-ac.com" style="border: none;">
                        </iframe>
                        <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter/DU1Ia251o0y.js?version=41#channel=f2b84464d8&amp;origin=http%3A%2F%2Funitus-ac.com" style="border: none;">
                        </iframe>
                      </div>
                    </div>
                    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                      <div>
                      </div>
                    </div>
                  </div>
                  <div class="face_book_plgin_border_top">
                  </div>
                  <div class="face_book_plgin_border_right">
                  </div>
                  <div class="face_book_plgin_border_bottom">
                  </div>
                  <div class="face_book_plgin_border_left">
                  </div>
                </div>
              </div>
              </footer>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(function(){
        $("[data-js=markdown]").on("click",function(){
          markdownPreview($(this).next().val())
        });

        var markdownPreview = function(plainText){
          $.ajax({
            type: "POST",
            processData: false,
            url: "https://api.github.com/markdown/raw",
            dataType: "html",
            data: plainText,
            contentType: "text/plain",
            success: function(data){
                $("#markdownModal .modal-body h").html(data)
                generate("success", "通信成功", "markdownが正常に送られました。");
                $("#markdownModal").modal('show');
            },
            error: function(jqXHR, textStatus, error){
                generate("warning", "サークル追加に失敗しました", "正常にサークルの追加ができませんでした。エラーメッセージ「"+error+"」");
            }
          });
        }
      });
    </script>
<!-- ================================================================================================-->

    <!-- 一般ユーザー用 -->
    <script>
      $(function(){
      });
    </script>

    <!-- notification -->
    <script type="text/javascript">
        function generate(type, title, content) {
            var icon = "";
            if(type=="error"){
              icon = "fa-bolt";
            }else if(type=="success"){
              icon = "fa-thumbs-o-up";
            }else if(type=="info"){
              icon = "fa-info";
            }
            text = '<div class="noty_title"><i class="fa ' + icon + '"></i>' + title + '</div><div class="noty_content">' + content + '</div>'
            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'topLeft',
                closeWith   : ['click'],
                theme       : 'relax',
                maxVisible  : 10,
                animation   : {
                    open  : 'animated fadeInLeft',
                    close : 'animated fadeOutLeft',
                    easing: 'swing',
                    speed : 100
                }
            });
            setTimeout(function() {
              $("#" + n.options.id).trigger("click");
            }, 3000);
        }

        // function generateAll() {
        //   generate('warning', notification_html[0]);
        //   generate('error', notification_html[1]);
        //   generate('information', notification_html[2]);
        //   generate('success', notification_html[3]);
        //   generate('notification');
        //   generate('success');
        // }

        $(document).ready(function () {
            data_status  = 'success'
            data_title   = '通信成功'
            data_content = '正常に保存されました'
            if(false){
              setTimeout(function() {
                  generate(data_status, data_title, data_content);
                  generate('error', "通信失敗", "不正な値が入力されました");
                  generate('success', "通信成功", "うまく動いています");
                  generate("error", "石井翔", "重大なバグです。");
              }, 500);
            }

        });

    </script>

    <!--クッキー削除-->
    <script>
      $("[data-js=logout]").on("click", function(){
        var date1 = new Date();
        date1.setTime(0);
        document.cookie = "counts=;expires="+date1.toGMTString();
        location.reload();
      });
    </script>

    <!-- 管理者用ajax -->
    <script>
      $(function(){
        var i = 0;
        while(i<1){
          i++;
          var sendData = {
              count: 40,
              offset: 0
           };
          $.ajax(
          {
              type: "GET",
              url:"http://unitus-core.azurewebsites.net/Person/Dummy",
              data: sendData,
              success:function(msg)
              {
                console.log(msg.Content.Persons.length)
                generate("success", "サークル追加", "正常にサークルの追加が完了しました。");
                $.each(msg.Content.Persons, function(){
                  var text =  ''
                      text += '<tr>'
                      text += '<td class="name name_w">' + this.Name + '<i data-js="deleteAccount" class="fa fa-times"></i></td>'
                      text += '<td class="author author_w">' + "閲覧者" + '</td>'
                      text += '<td class="number number_w">' + this.Grade + '</td>'
                      text += '<td class="university university_w">' + this.BelongedTo + '</td>'
                      text += '<td class="mail mail_w">' + this.UserName + '<i class="fa fa-clipboard" data-js="copyMail" data-clipboard-text="' + this.UserName +'"></i></td>'
                      text += '</tr>'
                  $("[data-js=userList]").append(text);
                });

                // list生成時に監視するエレメントの生成
                $("[data-js=copyMail]").each(function(index){
                  var client = new ZeroClipboard( $(this) );
                  client.on( "aftercopy", function( event ) {
                    obj = event.data;
                    for(var key in obj){
                      generate('info', "コピー成功", obj[key] + "をクリップボードにコピーしました。")
                    }
                  });
                });
                $("[data-js=deleteAccount]").on("click", function(){
                  if(confirm($(this).parent().text() + "を削除しますか？")){
                    generate('success', "削除成功", $(this).parent().text()+"を削除しました");
                  }else{
                    generate('error', "キャンセル", $(this).parent().text()+"の削除をとりやめました");
                  }
                });
              },
              error:function(msg){
                generate("warning", "サークル追加に失敗しました", "サークルの追加ができませんでした。エラーメッセージ「"+msg+"」");
              }
          });
        }
      });
    </script>

    <!-- 管理者用 -->
    <script>
      $(function(){
        $("[data-js=open_admin]").on("click", function(e){
          e.stopPropagation();
          e.preventDefault();
          $("#administrator").removeClass("hidden_panel");
        });

        $("[data-js=close_admin]").on("click", function(e){
          $("#administrator").addClass("hidden_panel");
        });

      });
    </script>
  </body>
</html>