@extends('layouts.app')

@section ('look_up_document')
    <div id="pageintro" class="hoc clear"> 
      
        <div>
          <ul style="list-style-type: none;">
            <li>
              <article>
                <h3 class="heading">Latvijas Universitātes</h3>
                <h4>Datorikas fakultāte</h4>
                <footer><a class="btn" href="directory">meklēt dokumentu</a></footer>
              </article>
            </li>
          </ul>
  
        </div>
    </div>
@endsection


@section('content')
     <div class="wrapper bgded overlay" >
        <article class="hoc container clear"> 
          <div class="two_quarter first">
            <div class="row border-bottom pb-3">
              <div class="col-md-4"><h4 class="nospace">Dekāns:</h4></div>
              <div class="col-md-8">
                <h5 class="nospace"><strong>Profesors Guntis Arnicāns</strong></h5>
                <p class="nospace">67034490, 29289578</p>
                <p class="nospace">e-pasts: Guntis.Arnicans@lu.lv</p>
              </div>
            </div>
            </br>
            <div class="row border-bottom pb-3">
              <div class="col-md-4"><h4 class="nospace">Prodekāns:</h4></div>
              <div class="col-md-8">
                <h5 class="nospace"><strong>Profesors Juris Borzovs</strong></h5>
                <p class="nospace">67034489, 29257530</p>
                <p class="nospace">e-pasts: Juris.Borzovs@lu.lv </p>
              </div>
            </div>
            </br>
            <div class="row">
              <div class="col-md-4"><h4 class="nospace">Sekretāre: </h4></div>
              <div class="col-md-8">
                <h5 class="nospace"><strong>Rudīte Ekmane</strong></h5>
                <p class="nospace">tālr. 67034488</p>
                <p class="nospace">e-pasts: Rudite.Ekmane@lu.lv</p>
              </div>
            </div>
          </div>
          <div class="two_quarter">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <a class="btn fl_right" target="_blank" href="https://www.lu.lv/par/kontaktinformacija/meklesana/saraksts/abc/">Vairāk kontaktu</a>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
        </article>
      </div>
    
      <div class="wrapper row3">
        <article class="hoc container clear"> 
          <div class="one_half first"><img class="inspace-10 borderedbox" src="pic/01.png" alt=""></div>
          <div class="one_half">
            <h3 class="heading">Latvijas universitāte</h3>
            <p>&emsp;&emsp;<strong>LU</strong> veicina Latvijas sabiedrības un valsts izaugsmi, garantē studējošajiem iespēju iegūt kvalitatīvu augstāko izglītību un profesionālās prasmes, kā arī attīstīties zinātniskās un mākslinieciskās jaunrades darbā. LU ir starptautiskās akadēmiskās dzīves aktīva dalībniece, tā sekmē kultūru sakarus, zinātnes nozaru sadarbību un zināšanu izmantošanu.<br />

              &emsp;&emsp;<strong>LU</strong> panākumus veido darbinieku un studējošo prāts, talants un darbs. LU rūpējas par studējošo un darbinieku profesionālo un radošo spēju izaugsmi, vienojot studijas un pētniecību, klasiskās universitātes tradīcijas un dinamisku attīstību, kalpojot sabiedrībai un nesot Latvijas vārdu pasaulē.<br />
              
              &emsp;&emsp;<strong>LU</strong> sekmē latviešu valodas attīstību un pilnvērtīgu funkcionēšanu visos līmeņos, nodrošina latvisko kultūras tradīciju izpēti un uzturēšanu, rūpējas par terminoloģijas attīstību latviešu valodā.<br />
              
              &emsp;&emsp;<strong>LU</strong> sagatavo mācībspēkus arī citām augstskolām un skolām, kā arī speciālistus valsts pārvaldei un pašvaldībām. LU uztur un veido nacionālas nozīmes kolekcijas.<br /></p>
            <footer><b><a href="https://www.df.lu.lv" target="_blank">Doties uz LU mājaslapu &raquo;</a></b></footer>
          </div>
    
        </article>
      </div>
@endsection

@section('style')
<style>
  /* Contact Information
  */
.col-md-5 p {margin: 0;}
.col-md-5 h5 {margin-bottom: 5px;}

</style>
@endsection