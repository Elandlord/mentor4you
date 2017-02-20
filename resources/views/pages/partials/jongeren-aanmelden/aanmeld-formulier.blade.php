      <div class="col-lg-12">
        <p class="text-bold text-color-main">
          Vul het onderstaand formulier in
        </p>
      </div>

      <form method='post' action='/mail/jongere-mail'>
        {{ csrf_field() }}
        <div class="col-lg-12 space-outside-down-md">
          <div class="row">
            <div class="col-lg-5 space-outside-up-sm">
              <label class='font-md text-light xs-text-center'>Voornaam</label>
              <input type='text' name='voornaam' placeholder='Voornaam' class='space-inside-xs font-md space-inside-sides-sm
          font-sm xs-text-center height-auto border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label class='font-md text-light xs-text-center'>Achternaam</label>
              <input type='text' name='achternaam' placeholder='Achternaam' class='space-inside-xs space-inside-sides-sm
          font-sm xs-text-center height-auto border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label class='font-md text-light xs-text-center'>Telefoonnummer</label>
              <input type='text' name='telefoonnummer' placeholder='Telefoonnummer' class='space-inside-xs space-inside-sides-sm
          font-sm xs-text-center height-auto border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label class='font-md text-light xs-text-center'>Emailadres</label>
              <input type='text' name='emailadres' placeholder='Emailadres' class='space-inside-xs space-inside-sides-sm
          font-sm xs-text-center height-auto border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label class='font-md text-light xs-text-center'>Gemeente</label>
              @include('partials.select', ['name' => 'municipality',  'options' => $municipalities ])
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label class='font-md text-light xs-text-center'>Geboortedatum</label>
              <input type='date' name='geboortedatum' class='space-inside-xs space-inside-sides-sm
          font-sm xs-text-center height-auto border border-accent space-outside-xs datepicker' required/>
            </div>
            <div class="col-lg-7 clear-left space-outside-up-sm">
              <label class='font-md text-light xs-text-center'>Bericht</label>
              <textarea name='bericht' class='textarea border border-accent space-outside-xs' required></textarea>
            </div>
            <div class="col-lg-12 space-outside-sm">
              <input type='submit' name='Verzenden' value='Verzenden' class='space-inside-xs space-inside-sides-sm border-none font-sm bg-secondary light text-color-light' />
            </div>
          </div>
        </div>
      </form>
