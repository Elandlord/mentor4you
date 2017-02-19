      <div class="col-lg-12">
        <p class="text bold ">
          Vul het onderstaand formulier in
        </p>
      </div>

      <form method='post' action='/mail/jongere-mail'>
        {{ csrf_field() }}
        <div class="col-lg-12 space-outside-md">
          <div class="row">
            <div class="col-lg-5 space-outside-up-sm">
              <label>Voornaam</label>
              <input type='text' name='voornaam' placeholder='Voornaam' class='input border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label>Achternaam</label>
              <input type='text' name='achternaam' placeholder='Achternaam' class='input border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label>Telefoonnummer</label>
              <input type='text' name='telefoonnummer' placeholder='Telefoonnummer' class='input border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label>Emailadres</label>
              <input type='text' name='emailadres' placeholder='Emailadres' class='input border border-accent space-outside-xs' required />
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label>Gemeente</label>
              @include('partials.select', ['name' => 'municipality',  'options' => $municipalities ])
            </div>
            <div class="col-lg-5 clear-left space-outside-up-sm">
              <label>Geboortedatum</label>
              <input type='text' name='geboortedatum' class='input border border-accent space-outside-xs space-inside-xs font-xs datepicker' />
            </div>
            <div class="col-lg-7 clear-left space-outside-up-sm">
              <label>Bericht</label>
              <textarea name='bericht' class='textarea border border-accent space-outside-xs' required></textarea>
            </div>
            <div class="col-lg-12 space-outside-sm">
              <input type='submit' name='Verzenden' value='Verzenden' class='space-inside-xs space-inside-sides-sm border-none font-sm bg-secondary light text-color-light' />
            </div>
          </div>
        </div>
      </form>
