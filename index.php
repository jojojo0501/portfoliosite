<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title>JOTA KANEKO ポートフォリオ</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
    <link href="css/reset.css" media="all" rel="stylesheet">
    <link href="css/style.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.png" />
  </head>
  <body>
    <!-- .header -->
    <header id="header">
      <nav class="gnav navbar navbar-expand-md navbar-dark">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="gnav-wrapper collapse navbar-collapse" id="nav-bar">
          <ul class="gnav-list navbar-nav">
            <li class="gnav-item nav-item"><a class="gnav-link nav-link" href="#top-section">TOP</a></li>
            <li class="gnav-item nav-item"><a class="gnav-link nav-link" href="#about-section">ABOUT</a></li>
            <li class="gnav-item nav-item"><a class="gnav-link nav-link" href="#skill-section">SKILL</a></li>
            <li class="gnav-item nav-item"><a class="gnav-link nav-link" href="#works-section">WORKS</a></li>
            <li class="gnav-item nav-item"><a class="gnav-link nav-link" href="#others-section">OTHERS</a></li>
            <li class="gnav-item nav-item"><a class="gnav-link nav-link" href="#contact-section">CONTACT</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- .header -->
    <!-- .main -->
    <main>
      <!-- .top-section -->
      <section class="s-top section" id="top-section">
        <div class="s-top__container">
          <h1>PORTFOLIO</h1>
          <h2>JOTA KANEKO</h2>
          <div>
            <a href="#about-section" class='next-section'>▼</a>
          </div>
        </div>
      </section>
      <!-- .top-section -->
      <!-- .about-section -->
      <section class="s-about section" id="about-section">
        <h2 class="section__title">ABOUT</h2>   
        <div class="row">
          <div class="col-md-8">
            <img class="s-about__image" src="img/about/profile.png" alt="">
          </div>
          <ul class="sns__container col-md-4">
            <li class="sns__item"><a class="sns__twitter" href="https://twitter.com/sa04ru18kiti" target="_blank"><i class="icon fab fa-twitter"></i>twitter</a></li>
            <li class="sns__item"><a class="sns__github" href="https://github.com/jojojo0501" target="_blank"><i class="icon fab fa-github"></i>github</a></li>
            <li class="sns__item"><a class="sns__github" href="https://qiita.com/jojojo0501" target="_blank"><i class="icon fab fa-quora"></i>Qiita</a></li>
            <li class="sns__item"><a class="sns__github" href="mailto:sarukiti0418@outlook.jp" target="_blank"><i class="icon far fa-envelope"></i>Email</a></li>
          </ul>
        </div>            
        <div class="s-about__table">
          <table class="table">
            <tr>
              <th style="width: 28%;"> 氏名</th>
              <td style="width: 72%;">金子　丈太(かねこ　じょうた)</td>
            </tr>
            <tr>
              <th>生年月日</th>
              <td>1997年5月1日生まれ（23歳）</td>
            </tr>
            <tr>
              <th>経歴</th>
              <td>
                2016年3月　埼玉県立熊谷高校 卒業<br>
                2016年4月　宇都宮大学農学部 入学<br>
                2020年3月　宇都宮大学農学部 卒業<br>
                2020年4月　大手建設コンサルタント（農業土木分野） 入社(在職)<br>
              </td>
            </tr>
            <tr>
              <th>現職<br>について</th>
              <td>建設コンサルタントの仕事は、道路や橋、ダム、上下水道といったインフラ関連の公共事業が中心であり、それらの工事をアドバイザリーすることが役割です。<br>具体的な仕事内容としては、建築物の規模や構造を計算して企画を立案したり、建設予定地における地盤調査や地質調査、測量調査を行ったり、工期を計算してスケジュールを組むことなどが挙げられます。<br>現場によって環境、条件が異なるため、日々頭を使って、あれこれ試行錯誤し、学びながら、調べながら進める仕事です。ある案件の中で、たまたまプログラミングに触れる機会があり、そこでプログラミングの面白さを知り、学習するきっかけになりました。転職活動に向けて動きつつも、現職もやりがいが大きく、上司や先輩にも恵まれ、充実した生活が送れていると考えています。</td>
            </tr>
            <tr>
                <th>資格</th>
                <td>ITパスポート<br>TOEIC 710点<br>秘書技能検定2級<br>普通自動車運転免許</td>
            </tr>
          </table>
        </div>
      </section>
      <!-- /.about-section -->
      <!-- .skill-section -->
      <section class="s-skill section" id="skill-section">
        <h2 class="section__title">SKILL</h2>
        <h3>私のプログラミングの学習記録を時系列に沿って紹介します。</h3>
        <dl>
          <dt>2020年8月〜：<span>プログラミングとの出会い</span></dt>
          <dd>現職の業務で、ある地区の水収支計算(田や畑の面積、降水量、気温などからその地区で農業をするために必要な水の量を算定すること)を行うプログラム<span>（FORTRANで書かれている）</span>を改造する業務を担いました。実際の作業は、定数で書かれている降雨データ（20年以上前のもの）を最新のものに書き換えたり、if文の条件を変更するものでした。当時、「HTMLって何？」というような状態だったため、勉強しながら業務を進めていましたが、この業務をきっかけにプログラミングっておもしろそうだなと興味を持ちました。</dd>
          <dt>2020年9月〜：<span>HTML、CSS</span></dt>
          <dd>業務で少しプログラミングに触れたことをきっかけにウェブアプリを作ってみたいと思い、趣味として<span>HTML、CSS</span>の学習を始めました。あくまで趣味での学習であり、転職活動をするなんて考えてもいませんでした。</dd>
          <dt>2020年10月〜：<span>ITパスポートの取得</span></dt>
          <dd>現職の会社の方針として、IT関連知識の強化があります。IT関連の最低限の基礎知識を身につけるため<span>ITパスポート</span>の学習をし無事、試験を通過しました。取得すると現職の会社から奨励金がもらえることも、試験学習のやる気に繋がりました。</dd>
          <dt>2020年11月〜12月：<span>PHP(Laravel)、MySQL</span></dt>
          <dd>サーバーサイドの言語を学習するため、<span>PHP(Laravel)</span>を学習しました。また、データベースを扱うため、<span>MySQL</span>を学習しました。これらとあわせて、ターミナル上での基礎的なコマンド操作、ソースコード管理のための<span>Git,GitHub</span>について学習を始めました。この頃から自分が書いたプログラムが動くことに対する喜びから、転職を意識して勉強に取り組み始めました。</dd>
          <dt>2021年1月〜２月：<span>JavaScript</span></dt>
          <dd>ウェブサイトに動きをつけるため、<span>JavaScript（jQuery）</span>を学習しました。その後、フレームワークである、<span>React</span>にも触れました。</dd>
          <dt>2021年2月〜現在：<span>ポートフォリオ作成、とりまとめ</span></dt>
          <dd>今までの学習で使用したアウトプット成果をポートフォリオとして取りまとめました。</dd>
          <dt>2021年3月〜現在：<span>PHP、Laravelの復習、AWSの学習</span></dt>
          <dd>バックエンドエンジニアを目指すことを固め、PHP、Laravel、AWSについて復習、学習中です。</dd>
        </dl>
      </section>
          <!-- /.skill-section -->
          <!-- .works-section -->
      <section class="s-works section" id="works-section">
        <h2 class="section__title">WORKS</h2>
        <div class="s-works__container">
          <div class="s-works__item" >
            <h3>Cafe <span>Introductions</span></h3>
            <div class="row">
              <div class="s-works__link col-lg-6"> 
                <div class="s-works__img">  
                  <a href="https://cafe-introductions.herokuapp.com/" target="_blank"> <small>画像をクリックすると製作物のページへ飛びます。</small><img src="./img/works/works_img1.png" alt=""></a>
                </div>
                <div class="s-works__mv mt-5">  
                <small>サイトマップ、データベース図</small>
                <video src="./img/works/works_mv1.mp4" preload=“auto” controls autoPictureInPicture></video>
                </div>
              </div>
              <div class="s-works__appInfo col-lg-6">
                <div class="s-works__content s-works-overview">
                  <h4><i class="icon far fa-flag"></i>アプリの概要</h4>
                  <ul>
                    <li>
                      おすすめのカフェを紹介するアプリ
                    </li>
                    <li>
                      おすすめしたいカフェの画像、コメントを投稿することが可能
                    </li>
                    <li>
                      いいね機能、フォロー機能、コメント機能、投稿削除機能、画像投稿機能等を搭載
                    </li>
                  </ul>
                </div>
                <div class="s-works__content s-works-purpose">
                  <h4><i class="icon far fa-calendar-check"></i>作成した意図、目的</h4>
                  <ul>
                    <li>
                      開発を通してウェブアプリの基本的な機能の作成方法を知る
                    </li>
                    <li>
                      PHP(Laravel)のアウトプット
                    </li>
                    <li>
                      データベース、SQLコマンドの学習
                    </li>
                    <li>
                      Bootstrapの学習
                    </li>
                    <li>
                      AWS(Cloud9)の使用方法の学習
                    </li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appPoints">
                  <h4><i class="icon far fa-lightbulb"></i>ポイント</h4>
                  <ul>
                    <li>初めてLaravelでCRUD処理を実装して作成したアプリ</li>
                    <li>ログインしていないと閲覧できないページ、AWSのS3を使用した画像アップロード機能の実装</li>
                    <li>ゲストログインの実装</li>
                    <li>AWS（VPC、EC2、RDS）を用いてデプロイ予定（現在はHerokuを使用）</li>
                    <li>コミュニティ活性化のため、トップページでフォローしていない人の投稿も見れるよう実装</li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appCode">
                  <h4><i class="icon fas fa-code"></i>ソースコード</h4>
                  <p><a href="https://github.com/jojojo0501/CafeIntroductions" target="_blank">ソースコードはこちら(GitHub)</a></p>
                </div>
                <div class="s-works__content s-works__References">
                  <h4><i class="icon fas fa-pencil-alt"></i>参考資料(サイトマップ、データベース図の作成)</h4>
                  <ul>
                    <li>アプリ作成前の段階でウェブアプリの全体像を整理するために<br>作成した。（左動画参照）</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="s-works__item" >
            <h3>架空ホテルのHP<span>（共同開発）</span></h3>
            <div class="row">
              <div class="s-works__link col-lg-6"> 
                <div class="s-works__img">  
                  <a href="https://tenkuehotel-r018.netlify.app/"  target="_blank"> <small>画像をクリックすると製作物のページへ飛びます。</small><img src="./img/works/works_img3.png" alt=""></a>
                </div>
              </div>
              <div class="s-works__appInfo col-lg-6">
                <div class="s-works__content s-works-overview">
                  <h4><i class="icon far fa-flag"></i>アプリの概要</h4>
                  <ul>
                    <li>５つのページから構成される、架空ホテルのホームページ。</li>
                    <li>PM＋３人チームで共同開発で製作</li>
                  </ul>
                </div>
                <div class="s-works__content s-works-purpose">
                  <h4><i class="icon far fa-calendar-check"></i>作成した意図、目的</h4>
                  <ul>
                    <li>
                      チーム開発の経験
                    </li>
                    <li>
                      git関連のコマンドのアウトプット
                    </li>
                    <li>
                      JavaScript(jQuery)、Sassの学習
                    </li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appPoints">
                  <h4><i class="icon far fa-lightbulb"></i>ポイント</h4>
                  <ul>
                    <li>所属するオンラインサロンの現役エンジニアがPMとなり、未経験３人のチームメンバーでアプリ開発</li>
                    <li>Trelloのガントチャートでタスク管理。</li>
                    <li>Sassの記法はFLOCSSを使用。誰がみても分かりやすい命名、コードを意識しつつ製作。</li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appCode">
                  <h4><i class="icon fas fa-code"></i>ソースコード</h4>
                  <p><a href="https://github.com/jojojo0501/tenkue-hotel-r018" target="_blank">ソースコードはこちら(GitHub)</a></p>
                </div>
                <div class="s-works__content s-works__References">
                  <h4><i class="icon fas fa-pencil-alt"></i>参考資料（Qiita記事の執筆）</h4>
                  <p><a href="https://qiita.com/jojojo0501/items/17357d46e3ed1281001c" target="_blank">業界未経験が初めての共同開発を終えて</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="s-works__item" >
            <h3>ポートフォリオサイト<span>（本サイト）</span></h3>
            <div class="row">
              <div class="s-works__link col-lg-6"> 
                <div class="s-works__img">  
                  <a href="#"  target="_blank"> <small>画像をクリックすると製作物のページへ飛びます。</small><img src="./img/works/works_img2.png" alt=""></a>
                </div>
              </div>
              <div class="s-works__appInfo col-lg-6">
                <div class="s-works__content s-works-overview">
                  <h4><i class="icon far fa-flag"></i>アプリの概要</h4>
                  <ul>
                    <li>自己紹介や学習記録、いままで手がけた作品をまとめるために作成</li>
                    <li>お問い合わせフォームやSNSを通じた連絡窓口</li>
                  </ul>
                </div>
                <div class="s-works__content s-works-purpose">
                  <h4><i class="icon far fa-calendar-check"></i>作成した意図、目的</h4>
                  <ul>
                    <li>
                      作成したアウトプットの集約、とりまとめ
                    </li>
                    <li>
                      JavaScript(jQuery)の学習
                    </li>
                    <li>
                      PHPの学習
                    </li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appPoints">
                  <h4><i class="icon far fa-lightbulb"></i>ポイント</h4>
                  <ul>
                    <li>お問い合わせフォームの実装（PHP）<br>(テストで送信頂いて問題ございません。)</li>
                    <li>お問い合わせフォームにバリデーションやサニタイジングの実装</li>
                    <li>プログラミングの学習過程を時系列に沿って記載</li>
                    <li>トップへ戻るボタンの実装(jQuery)</li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appCode">
                  <h4><i class="icon fas fa-code"></i>ソースコード</h4>
                  <p><a href="https://github.com/jojojo0501/portfoliosite" target="_blank">ソースコードはこちら(GitHub)</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="s-works__item" >
            <h3>Sweet Typing<span>（タイピングゲーム）</span></h3>
            <div class="row">
              <div class="s-works__link col-lg-6"> 
                <div class="s-works__mv">  
                <small>アプリ使用時の動画</small>
                <video src="./img/works/works_mv4.mp4" preload=“auto” controls autoPictureInPicture></video>
                </div>
                <div class="s-works__img">  
                  <a href="http://jota-portfolio.sakura.ne.jp/TypingGame/index.html"  target="_blank"> <small>画像をクリックすると製作物のページへ飛びます。</small><img src="./img/works/works_img4.png" alt=""></a>
                </div>
              </div>
              <div class="s-works__appInfo col-lg-6">
                <div class="s-works__content s-works-overview">
                  <h4><i class="icon far fa-flag"></i>アプリの概要</h4>
                  <ul>
                    <li>正確かつ、早いブラインドタッチの習得を目指す人のためのタイピングゲーム</li>
                    <li>出題される問題は全て甘い食べ物</li>
                    <li>遊んだあとは正解数、ミスタイプ数、所要時間が表示される。</li>
                  </ul>
                </div>
                <div class="s-works__content s-works-purpose">
                  <h4><i class="icon far fa-calendar-check"></i>作成した意図、目的</h4>
                  <ul>
                    <li>
                      JavaScript(jQuery)の学習、アウトプット
                    </li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appPoints">
                  <h4><i class="icon far fa-lightbulb"></i>ポイント</h4>
                  <ul>
                    <li>JavaScript(jQuery)で書いたタイピングゲーム</li>
                    <li>正解数、ミスタイプ数、所要時間を表示させるための実装</li>
                    <li>生のPHPでユーザー登録機能、ログイン機能、ランキング
                    機能等を実装予定</li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appCode">
                  <h4><i class="icon fas fa-code"></i>ソースコード</h4>
                  <p><a href="https://github.com/jojojo0501/TypingGame" target="_blank">ソースコードはこちら(GitHub)</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="s-works__item" >
            <h3>TaskList</h3>
            <div class="row">
              <div class="s-works__link col-lg-6"> 
                <div class="s-works__mv">  
                <small>アプリ使用時の動画</small>
                <video src="./img/works/works_mv5.mp4" preload=“auto” controls autoPictureInPicture></video>
                </div>
              </div>
              <div class="s-works__appInfo col-lg-6">
                <div class="s-works__content s-works-overview">
                  <h4><i class="icon far fa-flag"></i>アプリの概要</h4>
                  <ul>
                    <li>タスク（タイトル、内容）操作ログを表示させるToDoアプリ</li>
                  </ul>
                </div>
                <div class="s-works__content s-works-purpose">
                  <h4><i class="icon far fa-calendar-check"></i>作成した意図、目的</h4>
                  <ul>
                    <li>
                      フロントエンドで主流のフレームワーク(React)に触れてみること。
                    </li>
                    <li>
                      ReactHooksの学習
                    </li>
                    <li>
                      Reduxの学習
                    </li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appPoints">
                  <h4><i class="icon far fa-lightbulb"></i>ポイント</h4>
                  <ul>
                    <li>初めてReactを使用して作成したアウトプット（今後も改良予定）</li>
                    <li>ReactHooksを使用</li>
                  </ul>
                </div>
                <div class="s-works__content s-works__appCode">
                  <h4><i class="icon fas fa-code"></i>ソースコード</h4>
                  <p><a href="https://github.com/jojojo0501/tasklist" target="_blank">ソースコードはこちら(GitHub)</a></p>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </section>
      <!-- /.works-section -->
      <!-- /.others-section -->
      <section class="s-others section" id="others-section">
        <h2 class="section__title">OTHERS</h2>   
        <div class="s-others__container">
          <div class="s-others__item">
              <div class="s-others__title"><h3><i class="icon fas fa-book-open"></i>日々の学習について</h3></div>
              <ul>
                <li><a href="https://twitter.com/sa04ru18kiti" target="_blank">毎日Twitterへの投稿(2020/12/21〜)</a></li>
                <li><a href="https://qiita.com/jojojo0501" target="_blank">Qiita記事の執筆によるアウトプット</a></li>
                <li>手帳を使った月単位、週単位のタスク管理をし、Googleカレンダーで日単位に落とし込み計画化<img src="./img/others/googlecalender.png" alt=""></li>
              </ul>
          </div>
          <div class="s-others__item">
            <div class="s-others__title"><h3><i class="icon fas fa-school"></i>学生時代について</h3></div>
            <p>学生時代に取り組んだことや、就職活動時に受けた質問に対する回答についてまとめました。
            特別突出したことを行っていたわけではありませんが、私の性格や人物像が現れているかと思います。<br>ここまでで、興味を持って頂けましたら下記リンクよりご確認いただけますと幸甚です。</p>
            <div class="s-others__school">
              <a href="school.html"><button class="btn btn-block">学生時代について</button></a>
            </div>
          </div>
        </div>
      </section>
      <!-- /.others-section -->
      <!-- .contact-section -->
      <section class="s-contact" id="contact-section">
        <h2 class="section__title">CONTACT</h2>
        <p class="section__text s-contact__text">お問い合わせは下記、フォーム又は<br>Twitter、メールよりお願いします。</p>
        <div class="contact-form">
          <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
            <div class="form-group row">
              <label class="col-form-label col-sm-3"><strong>お名前：</strong></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" placeholder="お名前" value="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-sm-3"><strong>Mail：</strong></label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email" placeholder="メールアドレス" value="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-sm-3"><strong>内容：</strong></label>
              <div class="col-sm-9">
                <textarea class="form-control" name="content" placeholder="内容" value=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn">確認画面へ</button>
              </div>
            </div>
          </form>
        </div>
        <ul class="s-contact__list">
          <li class="s-contact__item">
            <a class="s-contact__link" href="https://twitter.com/sa04ru18kiti/" target="_blank"><img src="img/contact/icon_tw.png" alt=""></a>
          </li>
        </ul>
        <div class="s-contact__mail">
          <a href="mailto:sarukiti0418@outlook.jp" target="_blank">sarukiti0418@outlook.jp</a>
        </div>
      </section>
      <!-- /.contact-section -->
    </main>　
    <!-- .main -->
    <!-- トップページへ戻るボタン -->
    <div>
      <a id='js-page-top'>▲</a>
    </div>
    <!-- .footer -->
    <footer>
        <div class="copyright">Copyright&copy;JOTA KANEKO. All Rights Reserved.</div>
    </footer>
    <!-- /.footer -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    <script type='text/javascript' src="js/script.js"></script>
    <script type='text/javascript' src="js/contact.js"></script>
  </body>
</html>