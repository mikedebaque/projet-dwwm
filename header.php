<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>

    <header class="sticky-top">
        <nav class=" navbar-expand-lg navbar-dark bg-dark container-fluid">
            <div class="row">
                <!-- LOGO et Dropdown Rayons -->
                <div class="col-sm-12 col-md-12 col-lg-4 nav justify-content-around">
                    <a class="navbar-brand" href="#"><img class="logo img-fluid" src="media/logo/logo-5.svg" alt="" width="128" height="60"></a>
                    <span class="pt-3"><button type="button" class="h-50 btn btn-outline-success dropdown-toggle" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Rayons</button></span>
                </div>
                <!-- Div searchbox -->
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-4 pt-3'>
                    <form class='navbar-form'>
                        <div class='input-group'>
                            <input class='form-control' type='text' name='search' placeholder='Rechercher...' />
                            <span class="input-group-btn">
                                <button type='submit' class='btn btn-outline-secondary'>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- Div icons -->
                <div class="col-md-12 col-sm-12 col-lg-4 nav pt-2 justify-content-around">
                    <!-- icone panier -->
                    <span class="icon">
                        <button class="btn">
                            <i style="color:white;" class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
                            <!-- <i style="color:white;" class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i> -->
                        </button>
                    </span>
                    <!-- icone favoris avec popover -->
                    <span class="icon">
                        <button id="popoverfav" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true">
                            <i style="color:#f263ce;" class="fa fa-heart fa-3x" aria-hidden="true"></i>
                        </button>
                    </span>
                    <!-- icone profil -->
                    <span class="icon">
                        <button id="popoverprofil" type="button" class="btn" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true">
                            <i style="color:white;" class="fa fa-user-circle fa-3x" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </div>
        </nav>
        <!-- Menu déroulant rayons -->
        <div class="pos-f-t" id="menuRayons">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark">
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                    <div class="rayons">
                        <p>Rayon 1</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- FAV POPOVER CONTENT -->
        <div id="favpopover-content" hidden>
            <div>
                <p>Vous devez être connecté pour utiliser les favoris.</p>
                <input class="btn btn-success" type="submit" value="Je me connecte">
            </div>
        </div>
        <!-- PROFIL POPOVER CONTENT -->
        <div id="profilpopover-content" hidden>
            <div>
                <p>Je me connecte :</p>
                <form action="">
                    <div class="form-group">
                        <input class="form-control" type="email" name="" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="" id="" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Se souvenir de moi</label>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Je me connecte">
                    </div>
                </form>
                <hr>
                <div>
                    <p>Vous n'avez pas de compte ?</p>
                    <input class="btn btn-success" type="submit" value="Créer mon compte">
                </div>
            </div>
        </div>


    </header>


    <div class="container-fluid">

        <div class="row">




            <div class="content col-8 justify-content-center">
                <p>
                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt dolore libero dolorum error sint fugit dolor porro quaerat ad iste? Eveniet laborum voluptatem eos dolorum sapiente, natus laboriosam fugiat cum.</span>
                    <span>Blanditiis recusandae sapiente beatae fugit commodi dolorem officiis eaque dicta ipsa porro assumenda rem vero accusantium quia laudantium, voluptates, perferendis maxime quo autem officia? Sint sunt officiis temporibus eveniet vel!</span>
                    <span>Cumque excepturi dolor optio. Unde illo accusamus, ipsam perferendis quaerat cumque temporibus maiores neque nam minus ab esse facere nesciunt ex repudiandae quibusdam nisi quia molestiae mollitia tenetur, qui odit.</span>
                    <span>Est rerum enim reiciendis eaque sint cum adipisci voluptas nihil aliquid eum dolorum, fuga saepe consequuntur. Nesciunt corrupti aperiam deleniti eveniet cum, magnam fuga qui rem esse! Iure, accusantium reprehenderit.</span>
                    <span>Repellendus atque vel officiis, eos fugiat, odit quo sapiente consequuntur doloremque, quae quas cupiditate. Cupiditate, expedita vero deleniti magni veniam voluptatibus minima officiis quos eum amet provident velit, odit enim!</span>
                    <span>Totam laborum, officia nam possimus numquam nulla maxime sapiente dolores ullam, recusandae debitis at minima architecto autem ipsum modi doloribus impedit quae deserunt itaque. Voluptatem autem quos atque ut nisi?</span>
                    <span>Mollitia inventore nulla debitis ut facere est ex voluptatibus architecto aliquid iusto blanditiis libero laborum ducimus, omnis illum quod sequi, laboriosam dolor? Consequuntur rerum cumque, eum iure corporis dolores repellendus.</span>
                    <span>Aperiam vel temporibus ipsa numquam, id odio accusamus dolorem, necessitatibus dolores pariatur velit fugiat veritatis! Consequuntur inventore minima perspiciatis sapiente, omnis voluptatum sunt hic dolores nemo architecto eligendi debitis reprehenderit?</span>
                    <span>Quos itaque et voluptas doloremque laborum possimus ab alias cum, ex quidem perferendis dignissimos ullam velit reprehenderit quia? Facere quaerat laborum tempora ipsum dolore architecto nulla saepe! Cumque, odio quis?</span>
                    <span>Suscipit laboriosam deserunt dolor, culpa expedita cum inventore nemo voluptates velit doloribus optio dolores porro perspiciatis ad repellendus quia nam. Veritatis blanditiis tempore numquam vero facere in iure animi esse?</span>
                    <span>Architecto blanditiis vitae alias quibusdam perferendis nesciunt id tempora debitis quidem doloribus, obcaecati dolore repudiandae quasi voluptatem neque assumenda accusamus aliquid similique distinctio optio dolorem. Quam voluptatem maxime ullam. Vitae.</span>
                    <span>Minus, illo reprehenderit id laudantium, velit impedit pariatur doloribus adipisci deserunt aut, eveniet laborum veritatis corporis? Natus, sed repudiandae odio cum ut excepturi pariatur ipsam quam dicta blanditiis iusto exercitationem.</span>
                    <span>Fuga ducimus repellendus alias quibusdam, fugiat dignissimos iure? Architecto veritatis dolore, esse non sapiente veniam impedit tempora fugit, iste cum rerum numquam optio fugiat voluptates ab cumque, eligendi minima eos.</span>
                    <span>Dolores odit consectetur voluptatum saepe itaque beatae nihil. Ducimus est repudiandae neque, doloribus distinctio dignissimos temporibus totam maxime eligendi nihil repellendus hic maiores incidunt recusandae veniam placeat voluptatibus obcaecati quis!</span>
                    <span>Natus, magnam iure a libero eveniet aliquid cumque voluptas temporibus hic quas numquam totam mollitia consequatur beatae nihil provident tenetur eius? Voluptate aut vero, nesciunt laboriosam nostrum earum exercitationem ipsam.</span>
                    <span>Quaerat aliquid iste hic, nostrum perspiciatis quasi inventore repudiandae placeat totam. Pariatur, placeat optio voluptatibus culpa, deleniti corporis commodi error beatae quos, perferendis consectetur ut neque assumenda! Magni, dolore voluptatum?</span>
                    <span>Temporibus voluptatem ratione maiores animi voluptates doloremque asperiores ullam perferendis! Voluptates officiis labore quibusdam consequatur possimus perferendis voluptatibus ipsa nam, nesciunt corrupti beatae, quo nobis magnam id in a placeat.</span>
                    <span>Sequi eius, ratione quibusdam obcaecati dolorem hic fuga dolores adipisci vel quas, rem natus quos harum consequatur veniam voluptatem eum nisi, atque enim odit? Id, aut. A possimus quam beatae!</span>
                    <span>Enim sapiente expedita accusamus fugit libero exercitationem harum obcaecati? Fuga quas quis quo perferendis quia veniam soluta non sit quod libero quaerat iure enim doloremque quos laboriosam, ex consequuntur illo.</span>
                    <span>Recusandae natus odit nulla tempore quos. Cupiditate nulla provident optio dolorum libero reprehenderit repellendus quis incidunt aliquam amet nihil beatae impedit quod quo at corrupti magni, perspiciatis dicta eos ratione.</span>
                    <span>Veritatis similique repellendus laborum voluptas neque! Optio corporis quis voluptatibus. Quam a, expedita dolorem ratione, repellendus eaque dolore dicta quidem similique laudantium facere! Doloremque cum nemo pariatur explicabo esse repellat.</span>
                    <span>Architecto porro soluta minima vel commodi. Quibusdam ad cum totam at officia cupiditate excepturi repudiandae praesentium, labore voluptatum nobis. Architecto nesciunt consectetur quo quisquam tempore provident voluptates molestiae? Asperiores, adipisci?</span>
                    <span>Dolor, cumque iste officiis rem cum ad quibusdam ipsam facere, quasi facilis eveniet quod, nisi impedit? Nihil dolorem fugit asperiores voluptas, ab in ratione atque iste, odit molestias optio labore.</span>
                    <span>Atque nobis praesentium illo animi dolores quibusdam, nam voluptates minima doloremque! Pariatur, minus ad. Aspernatur quasi iure consequatur sit harum nihil error officia laudantium, quibusdam voluptatum, illum animi sed modi?</span>
                    <span>Nesciunt molestiae et itaque quidem? Id reprehenderit odio dolor laborum voluptatum. Doloremque officia quis quo, modi veritatis quas quisquam, eligendi esse, explicabo magni quidem. Odit animi eveniet doloribus minus consectetur?</span>
                    <span>Ut, nulla, officiis nisi adipisci voluptatibus minima, corrupti tempora totam inventore officia ex neque! Temporibus distinctio quo facilis. Quasi, repudiandae. Unde consequatur illum omnis cum rerum est dolorem officia excepturi?</span>
                    <span>Minima obcaecati blanditiis quaerat sequi quam placeat commodi, non quos consequatur, amet doloribus odio repellendus iure consequuntur illum omnis nihil quo distinctio maiores dolorum nemo reiciendis! Aut nisi ex cumque.</span>
                    <span>Expedita vero quo, dolorum, numquam dolores sapiente commodi voluptatum ipsam error sit consequuntur voluptatibus tenetur saepe quisquam quasi? Accusantium dolore dicta minima laboriosam hic quod temporibus expedita porro necessitatibus laudantium.</span>
                    <span>Quisquam adipisci, quos perferendis repudiandae vel modi cupiditate ab soluta laudantium hic accusamus a quaerat distinctio voluptates sequi assumenda nesciunt dolorem deleniti mollitia pariatur suscipit! Dicta ad animi aliquid? Doloremque?</span>
                    <span>Dolores, itaque tempora magni dicta repellat ex illo labore recusandae aspernatur quis ipsa sit quasi expedita fugiat id iusto accusamus adipisci! Temporibus ea nulla exercitationem inventore, delectus pariatur fuga quisquam.</span>
                    <span>Consequuntur rerum nulla error ullam incidunt ab, repudiandae suscipit in reprehenderit adipisci tempora porro expedita, totam ipsa? Corrupti, quibusdam. Nesciunt officia est voluptatem necessitatibus expedita aspernatur accusamus, id dignissimos deserunt.</span>
                    <span>Doloremque optio labore quis quod iusto autem numquam atque praesentium, aut, tempore expedita nulla facere inventore doloribus fugit voluptatem alias officiis eius cumque harum? Amet accusantium eveniet quidem dicta neque?</span>
                    <span>Fuga libero animi dolore doloremque nemo reiciendis eaque nesciunt molestias quidem ipsa, sint error delectus asperiores minus blanditiis sit. Possimus laboriosam eius commodi amet voluptas ratione debitis consectetur tempore libero.</span>
                    <span>Nemo enim deleniti ipsam ea nesciunt accusantium alias quasi consequatur repellendus omnis ipsa illum veritatis, beatae quod accusamus culpa minima id amet eos suscipit. Impedit, facere fugiat? Quod, facilis inventore.</span>
                    <span>Inventore totam pariatur libero, laboriosam excepturi sit voluptatem facere alias odit, maxime, reiciendis expedita omnis mollitia. Provident delectus necessitatibus soluta, sapiente aliquam repellat culpa ullam beatae. Soluta asperiores sit velit.</span>
                    <span>Laboriosam cum at exercitationem dolore sit saepe itaque iure illo perspiciatis pariatur et possimus quasi hic vitae sequi minus, commodi qui error similique? Quo tempore suscipit enim nemo, omnis excepturi?</span>
                    <span>Soluta hic nisi reiciendis! Vel harum, ipsam iure numquam provident repellendus modi, voluptate, dignissimos sunt dolores nesciunt. Neque architecto dignissimos qui sequi iste deleniti eos voluptas quidem assumenda. Ipsa, necessitatibus?</span>
                    <span>Quis fuga obcaecati ipsam dicta eius id minima illum? Ipsa facere veritatis illo est suscipit saepe, numquam consequuntur ea blanditiis eaque. Modi quas id unde, quae est mollitia voluptates amet?</span>
                    <span>Quo assumenda ipsa odio in dolorum, commodi impedit nostrum non sit laboriosam eos officiis, ipsum reiciendis excepturi iste. Laboriosam perferendis accusamus vero labore aliquid eos, doloribus aut voluptatum unde excepturi?</span>
                    <span>Molestiae sit dicta neque voluptatum quisquam odio quidem provident non ullam commodi harum, aliquid magni iure consequuntur modi rem quae nemo dolorum, omnis exercitationem! Culpa sint ex laboriosam ratione optio?</span>
                    <span>Sunt, reiciendis quia corporis eum voluptatibus ea dolorem error animi, culpa sint quo, non molestias beatae rerum architecto dolorum ipsam quod vel asperiores modi dolore. Exercitationem corrupti nemo placeat possimus.</span>
                    <span>Placeat error deleniti dolor necessitatibus repellat sint commodi quos temporibus nulla voluptatum blanditiis incidunt nisi, quis aliquid quo debitis ex? Aliquam dolore consequatur dignissimos minima quod voluptatem temporibus necessitatibus nemo.</span>
                    <span>Non sunt ab eos quas. Quis dicta temporibus blanditiis ullam nobis vero quos vitae dolor, suscipit voluptate odio reiciendis natus dolorum neque repudiandae et in distinctio, consequatur quas, minima atque?</span>
                    <span>Reiciendis nisi nihil sequi perferendis soluta quidem iusto consectetur nulla, debitis ad, nostrum beatae aperiam ipsa, eum molestias impedit nemo sed? Asperiores debitis obcaecati mollitia nesciunt, eligendi repellendus ea at?</span>
                    <span>Rem provident aliquam beatae modi qui exercitationem, sed ea sit placeat numquam mollitia corrupti magni aut ipsam sapiente reiciendis! Eaque dolore architecto libero maxime saepe, deleniti accusantium soluta. Ipsum, vero.</span>
                    <span>Quisquam, adipisci tenetur? Sapiente consectetur praesentium deserunt eveniet modi, temporibus sint a atque? Ratione placeat nihil sequi beatae praesentium ad ipsa qui dolores enim cumque natus recusandae, odio officia? Nam.</span>
                    <span>Voluptate omnis animi tempora. Officia consectetur nulla minus possimus aut itaque, impedit vero, aliquid, eum quas voluptates fugit asperiores minima iste? Voluptatum non magnam molestias corrupti veniam tenetur voluptas quae.</span>
                    <span>Nulla voluptas quod deleniti eveniet fuga. Numquam dolor accusantium excepturi repellat quod velit dicta voluptate natus sunt. Rerum voluptate quisquam temporibus quaerat provident totam nemo, blanditiis, error dignissimos, quas eum.</span>
                    <span>Reiciendis, voluptatem perferendis? Quas aperiam sed dicta sequi! Minus commodi quam necessitatibus tempora harum recusandae eaque, mollitia corrupti nostrum doloribus unde aperiam tempore architecto illo ipsum facilis fuga nesciunt provident.</span>
                    <span>Mollitia cum vel magnam sapiente soluta, distinctio aspernatur, perferendis impedit aliquam tempora illum reprehenderit, dolorem sed. Qui a exercitationem adipisci facere dicta minima reprehenderit, temporibus, incidunt voluptas quasi facilis odio.</span>
                    <span>Consequatur, harum. Temporibus aperiam asperiores minus cupiditate vitae amet dolor impedit nostrum ullam nulla? Doloremque, tempore commodi ipsam quasi saepe nostrum vero ipsum ea, recusandae eum impedit mollitia ad labore.</span>
                    <span>Et ipsam laborum maxime repellendus nisi, ut consequatur, tempora, ea recusandae officiis earum mollitia illo at sunt quaerat est sed exercitationem? Veritatis molestiae eaque numquam veniam? Modi, cum? Animi, blanditiis.</span>
                    <span>Quia velit laboriosam, hic quam voluptatum voluptate asperiores, aspernatur aut illum sit iste ipsam eligendi mollitia facere blanditiis quis impedit et minima corporis vitae labore corrupti sapiente praesentium! Dignissimos, odio?</span>
                    <span>Dolores distinctio, dolorum excepturi provident doloremque suscipit repellendus voluptatem nihil! Eaque, corrupti reiciendis? Nobis eligendi corporis deleniti ex iure amet in, sit recusandae eum molestiae obcaecati quidem animi qui libero?</span>
                    <span>Accusamus fuga omnis libero earum? Deserunt commodi, maxime magnam voluptatem, illo qui pariatur cum repellendus id numquam provident perspiciatis totam maiores aspernatur porro suscipit, fugit ipsa ab rerum officia labore.</span>
                    <span>Praesentium architecto quae deleniti rem repudiandae sunt nihil quam cupiditate modi nemo explicabo, in nesciunt voluptatum adipisci nisi iusto dolorum ut at ex quia, dolorem expedita voluptate, non ab. Odio!</span>
                    <span>Earum corrupti dicta eveniet. Accusamus repudiandae excepturi illo odit sint totam iusto expedita similique! Ipsa neque hic velit vero accusantium, labore et facere, quis quidem harum necessitatibus tempora ut delectus.</span>
                    <span>Aspernatur doloremque ratione iure distinctio, neque at laudantium repudiandae totam ipsa quae. Sequi et nemo nesciunt? Obcaecati culpa ea molestias possimus vero sapiente accusantium qui doloribus iusto molestiae, officia quis.</span>
                    <span>Consectetur beatae corrupti blanditiis fugit. Tenetur eos rerum excepturi nostrum eius vitae necessitatibus vel. Provident eos vel, veniam perferendis voluptate ad fugiat nulla quam et corrupti, laudantium, ex aliquam fugit!</span>
                    <span>Doloribus reprehenderit esse mollitia! Fugit qui odio, impedit sequi quas eos inventore vero corrupti, necessitatibus nam iure soluta ad fuga! Repellat at quidem laborum fugit vero quisquam distinctio quibusdam consequatur.</span>
                    <span>Odit illo hic rem at. Corporis distinctio at expedita? Harum nihil qui eius maxime sed recusandae dolorum voluptatibus cumque veritatis repudiandae, id aliquid consequuntur praesentium? Aperiam quod dolore odio eum.</span>
                    <span>Reprehenderit numquam ipsa consequatur dolorem iure, quaerat, hic quis atque, voluptates maxime unde. Perferendis blanditiis harum, iure adipisci voluptates voluptas sapiente tempora hic earum impedit! Quam excepturi praesentium neque. Deserunt.</span>
                    <span>Vitae iste eius eligendi? Nemo sed voluptatem asperiores natus laudantium, amet, quidem facere doloribus quam, obcaecati ipsum ut error fugit in! Neque sapiente voluptate vitae odit consectetur. Minus, est soluta!</span>
                    <span>Similique sunt quibusdam beatae excepturi expedita iure dicta vero soluta molestias suscipit porro voluptatibus quaerat, obcaecati nobis libero ea doloremque hic pariatur ipsa sequi id! Assumenda voluptatem illum fugiat natus.</span>
                    <span>Doloribus adipisci deleniti suscipit qui quos, voluptate autem eaque molestiae iure nisi laboriosam, ut illum unde aperiam dolorum labore iste earum optio neque quia cum vero error? Quas, tempore sint?</span>
                    <span>Pariatur aperiam odio voluptatibus non ut quis provident similique itaque quidem expedita dolorem officiis et, suscipit atque veritatis ea ipsam nisi recusandae sit voluptate nemo! Impedit ab numquam omnis aliquid?</span>
                    <span>Inventore corrupti, delectus pariatur animi dolorum illum repellat ab reprehenderit, assumenda alias officiis saepe sequi, voluptas tempore nobis libero nostrum ducimus doloribus facere? Recusandae fugit mollitia vel sit amet quo!</span>
                    <span>Error repellendus voluptatibus cupiditate aspernatur dolor minus a perferendis temporibus, eos illo excepturi velit nulla perspiciatis esse facilis dolorem tempore nobis cum ipsa. Dignissimos esse dolorem ipsum at enim magni.</span>
                    <span>Tenetur dignissimos consequatur mollitia architecto eligendi earum eveniet modi! Beatae saepe, omnis et tenetur, distinctio dolor cupiditate accusamus laudantium quo quod voluptatum ea quia consectetur numquam nam repudiandae! Quod, dignissimos.</span>
                    <span>Aut totam at libero minima, nobis quasi iure ipsam! Delectus praesentium laudantium perferendis nemo asperiores harum voluptas, ea reprehenderit ab minus, quod quae, animi debitis optio magni architecto blanditiis error.</span>
                    <span>Quod officia totam suscipit rem, excepturi id ullam quisquam laborum cum voluptas pariatur animi sequi omnis odit iusto officiis hic repudiandae minima. Consequatur vitae modi quas, non velit voluptatum dignissimos.</span>
                    <span>Dolorum repudiandae quisquam itaque sed, voluptate neque aspernatur, quibusdam corporis totam nulla quos recusandae provident quod veniam quam officiis impedit? Earum incidunt error quis adipisci vitae placeat numquam facere voluptatum!</span>
                    <span>Labore maiores tempora ab facilis asperiores reprehenderit mollitia nihil temporibus eum quod, illo quam eius maxime hic. Totam cupiditate illum nemo delectus voluptates culpa hic aliquam, non tempore voluptate dolorem?</span>
                    <span>Vitae ipsam dolore tempora aut et! Nobis, quibusdam facilis aliquam delectus ab deleniti sint maxime architecto a itaque corporis omnis qui in? Tempora excepturi sunt nisi a quis libero distinctio.</span>
                    <span>Dignissimos incidunt inventore quam perferendis laborum cumque suscipit, ex iusto facere aperiam accusamus possimus molestias. Obcaecati accusantium quisquam dolore magnam fugiat corrupti doloribus quas amet tempore. Magnam quis laudantium ullam!</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="popover.js"></script>
</body>

</html>