<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Les Informations Du compte') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Mettre a jours les informations du compte et l'adresse mail.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data" >
        @csrf
        @method('patch')
        <div>
            <x-input-label for="name" :value="__('Nom de l\'utilisateur')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <x-input2-label for="logo_ajout" :value="__('Ajouter un logo')" />
            <input name="logo_ajout" class="block w-full text-sm text-gray-900 border py-10 border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="logo_ajout" type="file">
        </div>

        <div>
            <x-input-label for="name_entreprise" :value="__('Nom de l\'entreprise')" />
            <x-text-input id="name_entreprise" name="name_entreprise" type="text" class="mt-1 block w-full" :value="old('name_entreprise', $user->name_entreprise)" required autocomplete="name_entreprise" />
            <x-input-error class="mt-2" :messages="$errors->get('name_entreprise')" />
        </div>

        <div>
            <x-input-label for="adresse_entreprise" :value="__('Adresse de l\'entreprise')" />
            <x-text-input id="adresse_entreprise" name="adresse_entreprise" type="text" class="mt-1 block w-full" :value="old('adresse_entreprise', $user->adresse_entreprise)" required autocomplete="adresse_entreprise" />

        </div>

        <div>
            <x-input-label for="cp_Ville" :value="__('CP Ville')" />
            <x-text-input id="CP_Ville" name="cp_Ville" type="text" class="mt-1 block w-full" :value="old('CP_Ville', $user->cp_Ville)" required autocomplete="CP_Ville" />
            
        </div>

        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <x-input2-label for="Pays" :value="__('Pays')" />
            <div class="relative">
              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="pays" name="pays" :value="old('pays', $user->pays)">
                <option value="CA">Canada</option>
                <option value="AF">Afghanistan</option>
                <option value="ZA">Afrique du sud</option>
                <option value="AX">Åland, îles</option>
                <option value="AL">Albanie</option>
                <option value="DZ">Algérie</option>
                <option value="DE">Allemagne</option>
                <option value="AD">Andorre</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctique</option>
                <option value="AG">Antigua et barbuda</option>
                <option value="SA">Arabie saoudite</option>
                <option value="AR">Argentine</option>
                <option value="AM">Arménie</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australie</option>
                <option value="AT">Autriche</option>
                <option value="AZ">Azerbaïdjan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahreïn</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbade</option>
                <option value="BY">Bélarus</option>
                <option value="BE">Belgique</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Bénin</option>
                <option value="BM">Bermudes</option>
                <option value="BT">Bhoutan</option>
                <option value="BO">Bolivie, l'état plurinational de</option>
                <option value="BQ">Bonaire, saint eustache et saba</option>
                <option value="BA">Bosnie herzégovine</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet, île</option>
                <option value="BR">Brésil</option>
                <option value="BN">Brunei darussalam</option>
                <option value="BG">Bulgarie</option>
                <option value="BF">Burkina faso</option>
                <option value="BI">Burundi</option>
                <option value="KY">Caïmans, îles</option>
                <option value="KH">Cambodge</option>
                <option value="CM">Cameroun</option>
                <option value="CV">Cap vert</option>
                <option value="CF">Centrafricaine, république</option>
                <option value="CL">Chili</option>
                <option value="CN">Chine</option>
                <option value="CX">Christmas, île</option>
                <option value="CY">Chypre</option>
                <option value="CC">Cocos (keeling), îles</option>
                <option value="CO">Colombie</option>
                <option value="KM">Comores</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, la république démocratique du</option>
                <option value="CK">Cook, îles</option>
                <option value="KR">Corée, république de</option>
                <option value="KP">Corée, république populaire démocratique de</option>
                <option value="CR">Costa rica</option>
                <option value="CI">Côte d'ivoire</option>
                <option value="HR">Croatie</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curaçao</option>
                <option value="DK">Danemark</option>
                <option value="DJ">Djibouti</option>
                <option value="DO">Dominicaine, république</option>
                <option value="DM">Dominique</option>
                <option value="EG">Égypte</option>
                <option value="SV">El salvador</option>
                <option value="AE">Émirats arabes unis</option>
                <option value="EC">Équateur</option>
                <option value="ER">Érythrée</option>
                <option value="ES">Espagne</option>
                <option value="EE">Estonie</option>
                <option value="US">États unis</option>
                <option value="ET">Éthiopie</option>
                <option value="FK">Falkland, îles (malvinas)</option>
                <option value="FO">Féroé, îles</option>
                <option value="FJ">Fidji</option>
                <option value="FI">Finlande</option>
                <option value="FR">France</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambie</option>
                <option value="GE">Géorgie</option>
                <option value="GS">Géorgie du sud et les îles sandwich du sud</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Grèce</option>
                <option value="GD">Grenade</option>
                <option value="GL">Groenland</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernesey</option>
                <option value="GN">Guinée</option>
                <option value="GW">Guinée bissau</option>
                <option value="GQ">Guinée équatoriale</option>
                <option value="GY">Guyana</option>
                <option value="GF">Guyane française</option>
                <option value="HT">Haïti</option>
                <option value="HM">Heard et îles macdonald, île</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong kong</option>
                <option value="HU">Hongrie</option>
                <option value="IM">Île de man</option>
                <option value="UM">Îles mineures éloignées des états unis</option>
                <option value="VG">Îles vierges britanniques</option>
                <option value="VI">Îles vierges des états unis</option>
                <option value="IN">Inde</option>
                <option value="ID">Indonésie</option>
                <option value="IR">Iran, république islamique d'</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Irlande</option>
                <option value="IS">Islande</option>
                <option value="IL">Israël</option>
                <option value="IT">Italie</option>
                <option value="JM">Jamaïque</option>
                <option value="JP">Japon</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordanie</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KG">Kirghizistan</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Koweït</option>
                <option value="LA">Lao, république démocratique populaire</option>
                <option value="LS">Lesotho</option>
                <option value="LV">Lettonie</option>
                <option value="LB">Liban</option>
                <option value="LR">Libéria</option>
                <option value="LY">Libye</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituanie</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MK">Macédoine, l'ex république yougoslave de</option>
                <option value="MG">Madagascar</option>
                <option value="MY">Malaisie</option>
                <option value="MW">Malawi</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malte</option>
                <option value="MP">Mariannes du nord, îles</option>
                <option value="MA">Maroc</option>
                <option value="MH">Marshall, îles</option>
                <option value="MQ">Martinique</option>
                <option value="MU">Maurice</option>
                <option value="MR">Mauritanie</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexique</option>
                <option value="FM">Micronésie, états fédérés de</option>
                <option value="MD">Moldova, république de</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolie</option>
                <option value="ME">Monténégro</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibie</option>
                <option value="NR">Nauru</option>
                <option value="NP">Népal</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigéria</option>
                <option value="NU">Niué</option>
                <option value="NF">Norfolk, île</option>
                <option value="NO">Norvège</option>
                <option value="NC">Nouvelle calédonie</option>
                <option value="NZ">Nouvelle zélande</option>
                <option value="IO">Océan indien, territoire britannique de l'</option>
                <option value="OM">Oman</option>
                <option value="UG">Ouganda</option>
                <option value="UZ">Ouzbékistan</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palaos</option>
                <option value="PS">Palestinien occupé, territoire</option>
                <option value="PA">Panama</option>
                <option value="PG">Papouasie nouvelle guinée</option>
                <option value="PY">Paraguay</option>
                <option value="NL">Pays bas</option>
                <option value="PE">Pérou</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Pologne</option>
                <option value="PF">Polynésie française</option>
                <option value="PR">Porto rico</option>
                <option value="PT">Portugal</option>
                <option value="QA">Qatar</option>
                <option value="RE">Réunion</option>
                <option value="RO">Roumanie</option>
                <option value="GB">Royaume uni</option>
                <option value="RU">Russie, fédération de</option>
                <option value="RW">Rwanda</option>
                <option value="EH">Sahara occidental</option>
                <option value="BL">Saint barthélemy</option>
                <option value="SH">Sainte hélène, ascension et tristan da cunha</option>
                <option value="LC">Sainte lucie</option>
                <option value="KN">Saint kitts et nevis</option>
                <option value="SM">Saint marin</option>
                <option value="MF">Saint martin(partie française)</option>
                <option value="SX">Saint martin (partie néerlandaise)</option>
                <option value="PM">Saint pierre et miquelon</option>
                <option value="VA">Saint siège (état de la cité du vatican)</option>
                <option value="VC">Saint vincent et les grenadines</option>
                <option value="SB">Salomon, îles</option>
                <option value="WS">Samoa</option>
                <option value="AS">Samoa américaines</option>
                <option value="ST">Sao tomé et principe</option>
                <option value="SN">Sénégal</option>
                <option value="RS">Serbie</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra leone</option>
                <option value="SG">Singapour</option>
                <option value="SK">Slovaquie</option>
                <option value="SI">Slovénie</option>
                <option value="SO">Somalie</option>
                <option value="SD">Soudan</option>
                <option value="SS">Soudan du sud</option>
                <option value="LK">Sri lanka</option>
                <option value="SE">Suède</option>
                <option value="CH">Suisse</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard et île jan mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SY">Syrienne, république arabe</option>
                <option value="TJ">Tadjikistan</option>
                <option value="TW">Taïwan, province de chine</option>
                <option value="TZ">Tanzanie, république unie de</option>
                <option value="TD">Tchad</option>
                <option value="CZ">Tchèque, république</option>
                <option value="TF">Terres australes françaises</option>
                <option value="TH">Thaïlande</option>
                <option value="TL">Timor leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinité et tobago</option>
                <option value="TN">Tunisie</option>
                <option value="TM">Turkménistan</option>
                <option value="TC">Turks et caïcos, îles</option>
                <option value="TR">Turquie</option>
                <option value="TV">Tuvalu</option>
                <option value="UA">Ukraine</option>
                <option value="UY">Uruguay</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela, république bolivarienne du</option>
                <option value="VN">Viet nam</option>
                <option value="WF">Wallis et futuna</option>
                <option value="YE">Yémen</option>
                <option value="ZM">Zambie</option>
              </select>
            </div>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('mis a jour !') }}</p>
            @endif
        </div>
    </form>
</section>
