<?php include 'header.php'; ?>

<section class="hero">
  <div class="container hero-inner">
    <div class="hero-copy">
      <p class="hero-kicker">PAST TO PRESENT</p>

      <h1 class="hero-title hero-title-animate">
        <span>過去から今へ、</span>
        <span>心に残るアニメをたどる。</span>
      </h1>

      <p class="hero-text hero-lead">
        名作は、時代ごとに生まれる。<br />
        懐かしい作品から近年の話題作まで、年代別におすすめアニメを紹介します。
      </p>

      <div class="hero-buttons">
        <a href="#timeline" class="btn btn-primary">年代別に見る</a>
        <a href="#featured" class="btn btn-secondary">注目作品を見る</a>
      </div>

      <div class="hero-badges">
        <span>80s</span>
        <span>90s</span>
        <span>00s</span>
        <span>10s</span>
        <span>20s</span>
      </div>
    </div>

    <div class="hero-visual">
      <div class="hero-panel">
        <p class="hero-panel-label">ANIME ERAS</p>

        <div class="hero-era-list">
          <div class="hero-era-item">
            <span class="hero-era-year">1980s</span>
            <span class="hero-era-name">SF / 劇場版の衝撃</span>
          </div>

          <div class="hero-era-item">
            <span class="hero-era-year">1990s</span>
            <span class="hero-era-name">熱量 / 心理描写 / 青春</span>
          </div>

          <div class="hero-era-item">
            <span class="hero-era-year">2000s</span>
            <span class="hero-era-name">完成度の高い名作群</span>
          </div>

          <div class="hero-era-item">
            <span class="hero-era-year">2010s</span>
            <span class="hero-era-name">世界的ヒットと重厚な物語</span>
          </div>

          <div class="hero-era-item">
            <span class="hero-era-year">2020s</span>
            <span class="hero-era-name">余韻と洗練、現代的進化</span>
          </div>
        </div>

        <div class="hero-panel-glow"></div>
      </div>
    </div>
  </div>
</section>

<section class="intro">
  <div class="container intro-grid">
    <div class="intro-card">
      <h2>時代で見る面白さ</h2>
      <p>
        作画、音楽、物語の作り方。アニメは時代によって表情が変わります。
        だからこそ、昔の作品も今の作品も、それぞれ違う魅力があります。
      </p>
    </div>

    <div class="intro-card">
      <h2>初心者でも選びやすい</h2>
      <p>
        作品数が多すぎて迷う人向けに、年代ごとに入りやすい作品を厳選。
        「まず何から観ればいい？」に応える構成です。
      </p>
    </div>

    <div class="intro-card">
      <h2>気分で絞り込める</h2>
      <p>
        バトル、青春、ファンタジー、社会派など、
        気分に合わせて作品を探せるフィルターもつけています。
      </p>
    </div>
  </div>
</section>

<section class="filter-section">
  <div class="container">
    <div class="section-head">
      <p class="section-label">FILTER</p>
      <h2>気分で絞り込む</h2>
    </div>

    <div class="filter-buttons" id="filterButtons">
      <button class="filter-btn is-active" data-filter="all">すべて</button>
      <button class="filter-btn" data-filter="fantasy">ファンタジー</button>
      <button class="filter-btn" data-filter="battle">バトル</button>
      <button class="filter-btn" data-filter="drama">ドラマ</button>
      <button class="filter-btn" data-filter="youth">青春</button>
      <button class="filter-btn" data-filter="sci-fi">SF</button>
    </div>
  </div>
</section>

<section class="timeline-section" id="timeline">
  <div class="container">
    <div class="section-head">
      <p class="section-label">TIMELINE</p>
      <h2>年代別おすすめアニメ</h2>
      <p class="section-text">
        ざっくり時代ごとに、雰囲気の違う名作を並べています。
      </p>
    </div>

    <div class="timeline">
      <article class="anime-card" data-genre="sci-fi drama">
        <div class="anime-year">1980s</div>
        <div class="anime-content">
          <span class="genre-chip">SF</span>
          <h3>AKIRA</h3>
          <p class="anime-copy">
            圧倒的な映像表現で語り継がれる、サイバーパンクの金字塔。
            古いのに古くない、衝撃のある一本。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="battle youth">
        <div class="anime-year">1990s</div>
        <div class="anime-content">
          <span class="genre-chip">バトル</span>
          <h3>幽☆遊☆白書</h3>
          <p class="anime-copy">
            王道少年バトルの熱さと、仲間との関係性の良さが光る作品。
            90年代らしい勢いが気持ちいい。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="youth drama">
        <div class="anime-year">1990s</div>
        <div class="anime-content">
          <span class="genre-chip">青春</span>
          <h3>新世紀エヴァンゲリオン</h3>
          <p class="anime-copy">
            ロボットものの枠を超えて、心の揺れや時代の空気まで残した一作。
            観終わったあとに語りたくなるタイプ。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="fantasy battle">
        <div class="anime-year">2000s</div>
        <div class="anime-content">
          <span class="genre-chip">ファンタジー</span>
          <h3>鋼の錬金術師 FULLMETAL ALCHEMIST</h3>
          <p class="anime-copy">
            物語の完成度、世界観、アクション、感情の動き。
            「迷ったらこれ」と言いやすい強さがある。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="sci-fi drama">
        <div class="anime-year">2000s</div>
        <div class="anime-content">
          <span class="genre-chip">SF</span>
          <h3>コードギアス 反逆のルルーシュ</h3>
          <p class="anime-copy">
            展開の引きが強く、次が止まらないタイプの傑作。
            頭脳戦とドラマのバランスが抜群。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="youth drama">
        <div class="anime-year">2010s</div>
        <div class="anime-content">
          <span class="genre-chip">青春</span>
          <h3>四月は君の嘘</h3>
          <p class="anime-copy">
            音楽と青春と喪失感が重なる、美しく切ない作品。
            感情を動かされたいときに強い。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="battle drama">
        <div class="anime-year">2010s</div>
        <div class="anime-content">
          <span class="genre-chip">バトル</span>
          <h3>進撃の巨人</h3>
          <p class="anime-copy">
            ただのバトル作品では終わらないスケール感。
            世界の見え方が何度も変わる、圧の強い名作。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="fantasy drama">
        <div class="anime-year">2020s</div>
        <div class="anime-content">
          <span class="genre-chip">ファンタジー</span>
          <h3>葬送のフリーレン</h3>
          <p class="anime-copy">
            派手さより余韻。静かな旅の中で、人との時間の意味が効いてくる。
            大人にも刺さる近年代表作。
          </p>
        </div>
      </article>

      <article class="anime-card" data-genre="battle fantasy">
        <div class="anime-year">2020s</div>
        <div class="anime-content">
          <span class="genre-chip">バトル</span>
          <h3>Solo Leveling</h3>
          <p class="anime-copy">
            爽快感重視で一気に観やすい、現代的ヒット作。
            強くなっていく気持ちよさが明快。
          </p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="featured-section" id="featured">
  <div class="container">
    <div class="section-head">
      <p class="section-label">FEATURED</p>
      <h2>まず観るならこの3本</h2>
    </div>

    <div class="featured-grid">
      <article class="featured-card">
        <p class="featured-tag">王道の完成度</p>
        <h3>鋼の錬金術師 FULLMETAL ALCHEMIST</h3>
        <p>
          ストーリーのまとまりが強く、初めてでも入りやすい。
          バトル、家族、兄弟、国家、全部入っている。
        </p>
      </article>

      <article class="featured-card">
        <p class="featured-tag">近年の本命</p>
        <h3>葬送のフリーレン</h3>
        <p>
          「冒険の後」を描く珍しさと、静かな感動が魅力。
          最近の作品から入りたい人におすすめ。
        </p>
      </article>

      <article class="featured-card">
        <p class="featured-tag">重厚な衝撃</p>
        <h3>進撃の巨人</h3>
        <p>
          一度ハマると抜けにくい強さがある。
          世界観重視、緊張感重視ならかなり相性がいい。
        </p>
      </article>
    </div>
  </div>
</section>

<section class="about-section" id="about">
  <div class="container about-box">
    <div>
      <p class="section-label">ABOUT</p>
      <h2>このサイトについて</h2>
    </div>
    <p>
      このサイトは、アニメの歴史をざっくり楽しみながら、
      自分に合いそうな作品を見つけるための入り口として作られています。
      まずは気になる年代かジャンルから、1本選んでみてください。
    </p>
  </div>
</section>

<section class="php-info-section">
  <div class="container">
    <div class="php-info-box">
      <p class="section-label">PHP TEST</p>
      <h2>このページはPHPで組み立てています</h2>
      <p>
        今日の日付:
        <strong><?php echo date("Y-m-d"); ?></strong>
      </p>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>