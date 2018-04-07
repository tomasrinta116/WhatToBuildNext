{% extends "chunks/base.php" %}

{% block main %}

<!-- frontpage -->
<div class="c-content c-content--aside">
  <aside id="js-aside" class="c-aside">
    <div id="js-aside__inner" class="c-aside__inner">
      <ul class="c-content-list c-content-list--collapsed">
        <li class="c-content-list__toggle">
          <svg class="c-icon c-icon--black" width="10px" height="7px">
            <use xlink:href="#svg-arrow-down"></use>
          </svg>
        </li>
        <li><a href="#">Trends</a>
          <ul class="c-content-list__sublist">
            <li><a href="#">Machine Learning</a></li>
            <li><a href="#">Automation</a></li>
            <li><a href="#">Rising upper class</a></li>
          </ul>
        </li>
        <li><a href="#">What Has Been Built</a>
          <ul class="c-content-list__sublist">
            <li><a href="#">Robo advisors</a></li>
            <li><a href="#">Crypto ETFs</a></li>
          </ul>
        </li>
        <li><a href="#">What To Build Next</a>
          <ul class="c-content-list__sublist">
            <li><a href="#">White label systems</a></li>
          </ul>
        </li>
        <li><a href="#">Links to Resources</a></li>
        <li><a href="#">Discussion <span>(320)</span></a></li>
      </ul>

      <div class="c-aside__user">
        <a class="c-aside__img" href="#"><img src="assets/img/profile.png" width="34" height="34"
                                              alt="Marc Fencton"></a>

        <div class="c-posts__time c-posts__time--blue">
          <svg class="c-icon c-icon--lightning c-posts__svg" width="10px" height="16px">
            <use xlink:href="#svg-lightning"></use>
          </svg>
          2 hours ago
        </div>
      </div>

      <div class="c-aside__bottom">
        <a href="#" id="js-follow" class="c-btn">Follow Wealth Management</a>

        <div class="c-aside__socials">
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--twitter" width="24px" height="20px">
              <use xlink:href="#svg-twitter"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--linkedin" width="24px" height="24px">
              <use xlink:href="#svg-linkedin"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--reddit" width="24px" height="24px">
              <use xlink:href="#svg-reddit"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--facebook" width="24px" height="24px">
              <use xlink:href="#svg-facebook"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </aside>

  <section class="c-content__post">
    <h1>What to Build Next in Wealth Management</h1>

    <p>In the next ten years, heaps of wealth are going to move on to the next generation. Millions of millenials are
      going to receive their babyboomer parents’ inheritences. Or sell their startups. Or crypto.</p>

    <p>Either way, just like their parents they will be looking to manage that wealth. Their expectations are going to
      be different, though. What products should we build for this market?</p>
  </section>

  <article class="c-article">
    <h2>
      <span class="c-article__control">
        <a class="c-icon-link" href="#">
          <svg class="c-icon c-icon--black" width="24px" height="24px">
            <use xlink:href="#svg-info"></use>
          </svg>
        </a>
        <a class="c-icon-link" href="#">
          <svg class="c-icon c-icon--black" width="24px" height="24px">
            <use xlink:href="#svg-pencil"></use>
          </svg>
        </a>
      </span>
      Trends
    </h2>
    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
      sem
      neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
      tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
      eros
      faucibus tincidunt.</p>

    <div class="c-article__video">
      <div class="c-article__video-wrapper">
        <iframe width="629" height="353" src="https://www.youtube.com/embed/z7T54yHB1_A?rel=0"
                allowfullscreen></iframe>
      </div>
    </div>
    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
      sem
      neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
      tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
      eros
      faucibus tincidunt.</p>

    <h3>Machine Learning</h3>

    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
      sem
      neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
      tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
      eros
      faucibus tincidunt.</p>

    <h3>Automation</h3>

    <p>Etiam rhoncus. <a href="#">Maecenas tempus</a>, tellus eget condimentum rhoncus, sem quam semper libero, sit
      amet
      adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec
      odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
      orci eget eros faucibus tincidunt.</p>

    <h2>What Has Been Built</h2>

    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem.</p>

    <div class="c-startups">
      <div class="c-startups__startup">
        <img class="c-startups__img" src="assets/img/logo-betterment.png" alt="Betterment">
        <a class="c-startups__link c-icon-link" href="#" target="_blank">Betterment
          <svg class="c-icon c-icon--black" width="10px" height="10px">
            <use xlink:href="#svg-external-link"></use>
          </svg>
        </a>

        <div class="c-startups__text">Digital Wealth Manager with 300,000 clients and $11 billion in assets under
          management
        </div>
      </div>
      <div class="c-startups__startup">
        <img class="c-startups__img" src="assets/img/logo-betterment.png" alt="Betterment">
        <a class="c-startups__link c-icon-link" href="#" target="_blank">Betterment
          <svg class="c-icon c-icon--black" width="10px" height="10px">
            <use xlink:href="#svg-external-link"></use>
          </svg>
        </a>

        <div class="c-startups__text">Digital Wealth Manager with 300,000 clients and $11 billion in assets under
          management
        </div>
      </div>

      <div class="c-startups__startup">
        <img class="c-startups__img" src="assets/img/logo-wealthfront.png" alt="Wealthfront">
        <a class="c-startups__link c-icon-link" href="#" target="_blank">Wealthfront
          <svg class="c-icon c-icon--black" width="10px" height="10px">
            <use xlink:href="#svg-external-link"></use>
          </svg>
        </a>

        <div class="c-startups__text">Digital Wealth Manager with 300,000 clients and $11 billion in assets under
          management
        </div>
      </div>
      <div class="c-startups__startup">
        <img class="c-startups__img" src="assets/img/logo-wealthfront.png" alt="Wealthfront">
        <a class="c-startups__link c-icon-link" href="#" target="_blank">Wealthfront
          <svg class="c-icon c-icon--black" width="10px" height="10px">
            <use xlink:href="#svg-external-link"></use>
          </svg>
        </a>

        <div class="c-startups__text">Digital Wealth Manager with 300,000 clients and $11 billion in assets under
          management
        </div>
      </div>

      <div class="c-startups__startup">
        <img class="c-startups__img" src="assets/img/logo-mint.png" alt="Mint">
        <a class="c-startups__link c-icon-link" href="#" target="_blank">Mint
          <svg class="c-icon c-icon--black" width="10px" height="10px">
            <use xlink:href="#svg-external-link"></use>
          </svg>
        </a>

        <div class="c-startups__text">Digital Wealth Manager with 300,000 clients and $11 billion in assets under
          management
        </div>
      </div>
      <div class="c-startups__startup">
        <img class="c-startups__img" src="assets/img/logo-mint.png" alt="Mint">
        <a class="c-startups__link c-icon-link" href="#" target="_blank">Mint
          <svg class="c-icon c-icon--black" width="10px" height="10px">
            <use xlink:href="#svg-external-link"></use>
          </svg>
        </a>

        <div class="c-startups__text">Digital Wealth Manager with 300,000 clients and $11 billion in assets under
          management
        </div>
      </div>
    </div>

    <h2>What To Build Next</h2>

    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
      sem
      neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
      tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
      eros
      faucibus tincidunt.</p>

    <h3>White Label Systems</h3>

    <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
      sem
      neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
      tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
      eros
      faucibus tincidunt.</p>

    <h3>Automation</h3>

    <p>Etiam rhoncus. <a href="#">Maecenas tempus</a>, tellus eget condimentum rhoncus, sem quam semper libero, sit
      amet
      adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec
      odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
      orci eget eros faucibus tincidunt.</p>

    <h2>Contributors</h2>

    <p>Warm and special thanks to the contributors for providing their expertise. Without them this document would not
      have been possible.</p>

    <div class="c-contributors">
      <div class="c-contributors__card">
        <img class="c-contributors__img" src="assets/img/profile.png" alt="Marc Fencton">

        <div class="c-contributors__about">
          <div class="c-contributors__about-title">Marc Fencton</div>
          <div class="c-contributors__about-text">Fintech analyst Citi Bank</div>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--black" width="18px" height="17px">
              <use xlink:href="#svg-github"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--twitter" width="18px" height="15px">
              <use xlink:href="#svg-twitter"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--linkedin" width="18px" height="18px">
              <use xlink:href="#svg-linkedin"></use>
            </svg>
          </a>
        </div>
      </div>

      <div class="c-contributors__card">
        <img class="c-contributors__img" src="assets/img/profile.png" alt="Marc Fencton">

        <div class="c-contributors__about">
          <div class="c-contributors__about-title">Marc Fencton</div>
          <div class="c-contributors__about-text">Fintech analyst Citi Bank</div>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--black" width="18px" height="17px">
              <use xlink:href="#svg-github"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--twitter" width="18px" height="15px">
              <use xlink:href="#svg-twitter"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--linkedin" width="18px" height="18px">
              <use xlink:href="#svg-linkedin"></use>
            </svg>
          </a>
        </div>
      </div>

      <div class="c-contributors__card">
        <img class="c-contributors__img" src="assets/img/profile.png" alt="Marc Fencton">

        <div class="c-contributors__about">
          <div class="c-contributors__about-title">Marc Fencton</div>
          <div class="c-contributors__about-text">Fintech analyst Citi Bank</div>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--black" width="18px" height="17px">
              <use xlink:href="#svg-github"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--twitter" width="18px" height="15px">
              <use xlink:href="#svg-twitter"></use>
            </svg>
          </a>
          <a class="c-icon-link" href="#">
            <svg class="c-icon c-icon--linkedin" width="18px" height="18px">
              <use xlink:href="#svg-linkedin"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </article>
</div>

<?php echo $data['posts'][0]['content']; ?>

{% endblock %}