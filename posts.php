<?php
    ob_start();
    session_start();
    $pageTitle = 'posts';
    $Title = 'posts';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    include $tpl . 'header.php'; 
?>
  <main id="main">
    <section id="posts" class="posts">
        <div class="container">
            <div class="title mt-5">
                <h2 class="mt-5">المقالات</h2>
              </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card" style='background-image: url("assets/img/2-1.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">النصوص</a></h5>
                  <p class="card-text">اللهم اكفني بحلالك عن حرامك وأغنني بفضلك عمن سواك اللهم إني أعوذ بك من الهم والحزن والكسل والبخل وضلع الدين وغلبة الرجال.</p>
                  <div class="read-more"><a href="#"data-toggle="modal" data-target="#post1"><i class="icofont-arrow-left"></i>المزيد</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="card" style='background-image: url("assets/img/2-1.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">النحو</a></h5>
                  <p class="card-text">اللهم اكفني بحلالك عن حرامك وأغنني بفضلك عمن سواك اللهم إني أعوذ بك من الهم والحزن والكسل والبخل وضلع الدين وغلبة الرجال.</p>
                  <div class="read-more"><a href="#"data-toggle="modal" data-target="#post2"><i class="icofont-arrow-left"></i> المزيد</a></div>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url("assets/img/2-1.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">الأدب</a></h5>
                  <p class="card-text">اللهم اكفني بحلالك عن حرامك وأغنني بفضلك عمن سواك اللهم إني أعوذ بك من الهم والحزن والكسل والبخل وضلع الدين وغلبة الرجال.</p>
                  <div class="read-more"><a href="#" data-toggle="modal" data-target="#post3"><i class="icofont-arrow-left"></i> المزيد</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url("assets/img/2-1.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">البلاغة</a></h5>
                  <p class="card-text">اللهم اكفني بحلالك عن حرامك وأغنني بفضلك عمن سواك اللهم إني أعوذ بك من الهم والحزن والكسل والبخل وضلع الدين وغلبة الرجال.</p>
                  <div class="read-more"><a href="#" data-toggle="modal" data-target="#post4"><i class="icofont-arrow-left"></i> المزيد</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- Modal -->
<div class="modal fade" id="post1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#ed3c0d">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        اللهم أرزقني رزقاً لاتجعل لأحدٍ فيه منَه ولا في الآخرة عليه تبعةٌ برحمتك يا أرحم الراحمين. اللهم صب علينا الخير صباً صباً ولا تجعل عيشنا كداً كداً.
        الحمد لله الذي لا يُرجى إلا فضله، ولا رازق غيره. الله أكبر ليس كمثله شيء في الأرض ولا في السماء وهو السميع البصير.
        أصبَحنا على فطرةِ الإسلامِ وكلمةِ الإخلاصِ ودينِ نبيِّنا محمَّدٍ -صلَّى اللَّهُ عليْهِ وسلَّمَ- وملَّةِ أبينا إبراهيمَ -صلَّى اللَّهُ عليْهِ وسلَّمَ- حنيفاً مسلماً وما أنا منَ المشرِكينَ.
        “اللهم إني أسألك العافية في الدنيا والآخرة، اللهم إني أسألك العفو والعافية في ديني ودنياي وأهلي ومالي، اللهم استر عوراتي وآمن روعاتي، اللهم احفظني من بين يدي ومن خلفي وعن يميني وعن شمالي ومن فوقي وأعوذ بعظمتك أن أغتال من تحتي.
        اللهم ان كان رزقي في المساء فأنزله وأن كان رزقي في الأرض فأخرجه وإن كان بعيدًا فقربه، وإن كان قريبًا فيسره، وإن كان قليلًا فأكثره، وإن كان كثيرًا فبارك لي فيه.
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="post2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#ed3c0d">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        اللهم أرزقني رزقاً لاتجعل لأحدٍ فيه منَه ولا في الآخرة عليه تبعةٌ برحمتك يا أرحم الراحمين. اللهم صب علينا الخير صباً صباً ولا تجعل عيشنا كداً كداً.
        الحمد لله الذي لا يُرجى إلا فضله، ولا رازق غيره. الله أكبر ليس كمثله شيء في الأرض ولا في السماء وهو السميع البصير.
        أصبَحنا على فطرةِ الإسلامِ وكلمةِ الإخلاصِ ودينِ نبيِّنا محمَّدٍ -صلَّى اللَّهُ عليْهِ وسلَّمَ- وملَّةِ أبينا إبراهيمَ -صلَّى اللَّهُ عليْهِ وسلَّمَ- حنيفاً مسلماً وما أنا منَ المشرِكينَ.
        “اللهم إني أسألك العافية في الدنيا والآخرة، اللهم إني أسألك العفو والعافية في ديني ودنياي وأهلي ومالي، اللهم استر عوراتي وآمن روعاتي، اللهم احفظني من بين يدي ومن خلفي وعن يميني وعن شمالي ومن فوقي وأعوذ بعظمتك أن أغتال من تحتي.
        اللهم ان كان رزقي في المساء فأنزله وأن كان رزقي في الأرض فأخرجه وإن كان بعيدًا فقربه، وإن كان قريبًا فيسره، وإن كان قليلًا فأكثره، وإن كان كثيرًا فبارك لي فيه.
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="post3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#ed3c0d">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        اللهم أرزقني رزقاً لاتجعل لأحدٍ فيه منَه ولا في الآخرة عليه تبعةٌ برحمتك يا أرحم الراحمين. اللهم صب علينا الخير صباً صباً ولا تجعل عيشنا كداً كداً.
        الحمد لله الذي لا يُرجى إلا فضله، ولا رازق غيره. الله أكبر ليس كمثله شيء في الأرض ولا في السماء وهو السميع البصير.
        أصبَحنا على فطرةِ الإسلامِ وكلمةِ الإخلاصِ ودينِ نبيِّنا محمَّدٍ -صلَّى اللَّهُ عليْهِ وسلَّمَ- وملَّةِ أبينا إبراهيمَ -صلَّى اللَّهُ عليْهِ وسلَّمَ- حنيفاً مسلماً وما أنا منَ المشرِكينَ.
        “اللهم إني أسألك العافية في الدنيا والآخرة، اللهم إني أسألك العفو والعافية في ديني ودنياي وأهلي ومالي، اللهم استر عوراتي وآمن روعاتي، اللهم احفظني من بين يدي ومن خلفي وعن يميني وعن شمالي ومن فوقي وأعوذ بعظمتك أن أغتال من تحتي.
        اللهم ان كان رزقي في المساء فأنزله وأن كان رزقي في الأرض فأخرجه وإن كان بعيدًا فقربه، وإن كان قريبًا فيسره، وإن كان قليلًا فأكثره، وإن كان كثيرًا فبارك لي فيه.
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="post4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#ed3c0d;">&times;</span>
        </button>
      </div>
      <div class="modal-body text-right">
        اللهم أرزقني رزقاً لاتجعل لأحدٍ فيه منَه ولا في الآخرة عليه تبعةٌ برحمتك يا أرحم الراحمين. اللهم صب علينا الخير صباً صباً ولا تجعل عيشنا كداً كداً.
        الحمد لله الذي لا يُرجى إلا فضله، ولا رازق غيره. الله أكبر ليس كمثله شيء في الأرض ولا في السماء وهو السميع البصير.
        أصبَحنا على فطرةِ الإسلامِ وكلمةِ الإخلاصِ ودينِ نبيِّنا محمَّدٍ -صلَّى اللَّهُ عليْهِ وسلَّمَ- وملَّةِ أبينا إبراهيمَ -صلَّى اللَّهُ عليْهِ وسلَّمَ- حنيفاً مسلماً وما أنا منَ المشرِكينَ.
        “اللهم إني أسألك العافية في الدنيا والآخرة، اللهم إني أسألك العفو والعافية في ديني ودنياي وأهلي ومالي، اللهم استر عوراتي وآمن روعاتي، اللهم احفظني من بين يدي ومن خلفي وعن يميني وعن شمالي ومن فوقي وأعوذ بعظمتك أن أغتال من تحتي.
        اللهم ان كان رزقي في المساء فأنزله وأن كان رزقي في الأرض فأخرجه وإن كان بعيدًا فقربه، وإن كان قريبًا فيسره، وإن كان قليلًا فأكثره، وإن كان كثيرًا فبارك لي فيه
      </div>
    </div>
  </div>
</div>
  </main><!-- End #main -->
  <?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>