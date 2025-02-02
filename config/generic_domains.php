<?php
// Email templates
Configure::set('GenericDomains.email_templates', [
    'en_us' => [
        'lang' => 'en_us',
        'text' => 'Your new domain is being processed and will be registered soon!

Domain: {service.domain}

Thank you for your business!',
        'html' => '<p>Your new domain is being processed and will be registered soon!</p>
<p>Domain: {service.domain}</p>
<p>Thank you for your business!</p>'
    ]
]);

// Transfer fields
Configure::set('GenericDomains.transfer_fields', [
    'domain' => [
        'label' => Language::_('GenericDomains.transfer.domain', true),
        'type' => 'text'
    ],
    'transfer_key' => [
        'label' => Language::_('GenericDomains.transfer.transfer_key', true),
        'type' => 'text'
    ]
]);

// Domain fields
Configure::set('GenericDomains.domain_fields', [
    'domain' => [
        'label' => Language::_('GenericDomains.domain.domain', true),
        'type' => 'text'
    ],
]);

// All available TLDs
Configure::set('GenericDomains.tlds', [
    '.',
    '.abogado',
    '.ac',
    '.academy',
    '.accountants',
    '.active',
    '.actor',
    '.ad',
    '.adult',
    '.ae',
    '.aero',
    '.af',
    '.ag',
    '.agency',
    '.ai',
    '.airforce',
    '.al',
    '.allfinanz',
    '.alsace',
    '.am',
    '.android',
    '.ao',
    '.apartments',
    '.app',
    '.aquarelle',
    '.ar',
    '.archi',
    '.army',
    '.arpa',
    '.as',
    '.asia',
    '.associates',
    '.at',
    '.attorney',
    '.au',
    '.auction',
    '.audio',
    '.autos',
    '.aw',
    '.ax',
    '.baby',
    '.band',
    '.bank',
    '.bar',
    '.barclaycard',
    '.barclays',
    '.bargains',
    '.bayern',
    '.be',
    '.beer',
    '.berlin',
    '.best',
    '.bg',
    '.bh',
    '.bi',
    '.bid',
    '.bike',
    '.bingo',
    '.bio',
    '.biz',
    '.bj',
    '.black',
    '.blackfriday',
    '.blog',
    '.blue',
    '.bm',
    '.bmw',
    '.bn',
    '.bnpparibas',
    '.bo',
    '.boo',
    '.boutique',
    '.br',
    '.brussels',
    '.bt',
    '.budapest',
    '.build',
    '.builders',
    '.business',
    '.buzz',
    '.bw',
    '.by',
    '.bz',
    '.bzh',
    '.ca',
    '.cab',
    '.cal',
    '.cam',
    '.camera',
    '.camp',
    '.cancerresearch',
    '.canon',
    '.capetown',
    '.capital',
    '.cards',
    '.care',
    '.career',
    '.careers',
    '.casa',
    '.cash',
    '.casino',
    '.cat',
    '.catering',
    '.cc',
    '.center',
    '.ceo',
    '.cern',
    '.cf',
    '.ch',
    '.channel',
    '.chat',
    '.cheap',
    '.christmas',
    '.chrome',
    '.church',
    '.ci',
    '.city',
    '.cl',
    '.claims',
    '.cleaning',
    '.click',
    '.clinic',
    '.clothing',
    '.cloud',
    '.club',
    '.cm',
    '.cn',
    '.co',
    '.uk.co',
    '.co.uk',
    '.coach',
    '.codes',
    '.coffee',
    '.college',
    '.cologne',
    '.com',
    '.community',
    '.company',
    '.computer',
    '.condos',
    '.construction',
    '.consulting',
    '.contractors',
    '.cooking',
    '.cool',
    '.coop',
    '.country',
    '.courses',
    '.cr',
    '.credit',
    '.creditcard',
    '.cricket',
    '.cruises',
    '.cuisinella',
    '.cx',
    '.cymru',
    '.cz',
    '.dad',
    '.dance',
    '.dating',
    '.datsun',
    '.day',
    '.dclk',
    '.de',
    '.deals',
    '.degree',
    '.delivery',
    '.democrat',
    '.dental',
    '.dentist',
    '.desi',
    '.design',
    '.dev',
    '.diamonds',
    '.diet',
    '.digital',
    '.direct',
    '.directory',
    '.discount',
    '.dk',
    '.dm',
    '.do',
    '.docs',
    '.domains',
    '.doosan',
    '.durban',
    '.dvag',
    '.dz',
    '.earth',
    '.eat',
    '.ec',
    '.edu',
    '.education',
    '.ee',
    '.email',
    '.emerck',
    '.energy',
    '.engineer',
    '.engineering',
    '.enterprises',
    '.epson',
    '.equipment',
    '.es',
    '.esq',
    '.estate',
    '.eu',
    '.eurovision',
    '.eus',
    '.events',
    '.exchange',
    '.expert',
    '.exposed',
    '.fail',
    '.fans',
    '.farm',
    '.fashion',
    '.feedback',
    '.fi',
    '.film',
    '.finance',
    '.financial',
    '.firmdale',
    '.fish',
    '.fishing',
    '.fit',
    '.fitness',
    '.fj',
    '.flights',
    '.florist',
    '.flowers',
    '.fly',
    '.fm',
    '.fo',
    '.foo',
    '.football',
    '.forsale',
    '.foundation',
    '.fr',
    '.frl',
    '.frogans',
    '.fun',
    '.fund',
    '.furniture',
    '.futbol',
    '.ga',
    '.gal',
    '.gallery',
    '.garden',
    '.gb',
    '.gbiz',
    '.gd',
    '.gdn',
    '.gent',
    '.gf',
    '.gg',
    '.ggee',
    '.gi',
    '.gift',
    '.gifts',
    '.gives',
    '.gl',
    '.glass',
    '.gle',
    '.global',
    '.globo',
    '.gmail',
    '.gmx',
    '.goldpoint',
    '.goo',
    '.goog',
    '.google',
    '.gop',
    '.gov',
    '.gq',
    '.graphics',
    '.gratis',
    '.green',
    '.gripe',
    '.gs',
    '.guide',
    '.guitars',
    '.guru',
    '.gy',
    '.hamburg',
    '.hangout',
    '.haus',
    '.healthcare',
    '.help',
    '.here',
    '.hiphop',
    '.hiv',
    '.hk',
    '.hm',
    '.hn',
    '.holdings',
    '.holiday',
    '.homes',
    '.horse',
    '.host',
    '.hosting',
    '.house',
    '.how',
    '.hr',
    '.ht',
    '.hu',
    '.ibm',
    '.icu',
    '.id',
    '.ie',
    '.ifm',
    '.il',
    '.im',
    '.immo',
    '.immobilien',
    '.in',
    '.inc',
    '.industries',
    '.infiniti',
    '.info',
    '.ing',
    '.ink',
    '.institute',
    '.insure',
    '.int',
    '.international',
    '.investments',
    '.io',
    '.iq',
    '.ir',
    '.is',
    '.it',
    '.java',
    '.jcb',
    '.je',
    '.jetzt',
    '.jobs',
    '.joburg',
    '.jp',
    '.juegos',
    '.kaufen',
    '.kddi',
    '.ke',
    '.kg',
    '.ki',
    '.kim',
    '.kitchen',
    '.kiwi',
    '.koeln',
    '.kr',
    '.krd',
    '.kred',
    '.ky',
    '.kyoto',
    '.kz',
    '.la',
    '.lacaixa',
    '.land',
    '.lat',
    '.latrobe',
    '.lawyer',
    '.lc',
    '.lease',
    '.leclerc',
    '.legal',
    '.lgbt',
    '.li',
    '.life',
    '.lighting',
    '.limited',
    '.limo',
    '.link',
    '.live',
    '.loans',
    '.london',
    '.lotte',
    '.lotto',
    '.lt',
    '.ltd',
    '.ltda',
    '.lu',
    '.luxe',
    '.luxury',
    '.lv',
    '.eu.lv',
    '.ly',
    '.ma',
    '.madrid',
    '.maison',
    '.management',
    '.mango',
    '.market',
    '.marketing',
    '.mc',
    '.md',
    '.me',
    '.media',
    '.meet',
    '.melbourne',
    '.meme',
    '.memorial',
    '.menu',
    '.mg',
    '.miami',
    '.mil',
    '.mini',
    '.mk',
    '.ml',
    '.mn',
    '.mo',
    '.mobi',
    '.moda',
    '.monash',
    '.money',
    '.mortgage',
    '.moscow',
    '.motorcycles',
    '.mov',
    '.mp',
    '.ms',
    '.mtpc',
    '.mu',
    '.museum',
    '.mx',
    '.my',
    '.mz',
    '.na',
    '.nagoya',
    '.name',
    '.navy',
    '.nc',
    '.net',
    '.network',
    '.new',
    '.news',
    '.nexus',
    '.nf',
    '.ng',
    '.ngo',
    '.nico',
    '.ninja',
    '.nissan',
    '.nl',
    '.co.nl',
    '.no',
    '.nra',
    '.nrw',
    '.nu',
    '.nyc',
    '.nz',
    '.okinawa',
    '.om',
    '.one',
    '.ong',
    '.onl',
    '.online',
    '.ooo',
    '.org',
    '.organic',
    '.ovh',
    '.page',
    '.paris',
    '.partners',
    '.parts',
    '.pe',
    '.pf',
    '.photo',
    '.photography',
    '.photos',
    '.physio',
    '.pics',
    '.pictures',
    '.pink',
    '.pizza',
    '.pl',
    '.place',
    '.plumbing',
    '.pm',
    '.pohl',
    '.poker',
    '.porn',
    '.post',
    '.pr',
    '.press',
    '.pro',
    '.prod',
    '.productions',
    '.prof',
    '.properties',
    '.property',
    '.ps',
    '.pt',
    '.pub',
    '.pw',
    '.qa',
    '.qpon',
    '.quebec',
    '.re',
    '.recipes',
    '.red',
    '.rehab',
    '.reise',
    '.reisen',
    '.reit',
    '.rentals',
    '.repair',
    '.report',
    '.republican',
    '.rest',
    '.restaurant',
    '.reviews',
    '.rich',
    '.rio',
    '.rip',
    '.ro',
    '.rocks',
    '.rodeo',
    '.rs',
    '.rsvp',
    '.ru',
    '.ruhr',
    '.run',
    '.net.ru',
    '.org.ru',
    '.pp.ru',
    '.rw',
    '.sa',
    '.saarland',
    '.sale',
    '.samsung',
    '.sarl',
    '.saxo',
    '.sb',
    '.sc',
    '.sca',
    '.scb',
    '.schmidt',
    '.school',
    '.schule',
    '.scot',
    '.se',
    '.services',
    '.sexy',
    '.sg',
    '.sh',
    '.shiksha',
    '.shoes',
    '.shop',
    '.si',
    '.singles',
    '.site',
    '.sk',
    '.sky',
    '.sl',
    '.sm',
    '.sn',
    '.so',
    '.social',
    '.software',
    '.sohu',
    '.solar',
    '.solutions',
    '.soy',
    '.space',
    '.st',
    '.store',
    '.study',
    '.style',
    '.su',
    '.sochi.su',
    '.sucks',
    '.supplies',
    '.supply',
    '.support',
    '.surf',
    '.surgery',
    '.sx',
    '.sy',
    '.sydney',
    '.systems',
    '.taipei',
    '.tatar',
    '.tattoo',
    '.tax',
    '.tc',
    '.technology',
    '.tech',
    '.tel',
    '.tennis',
    '.tf',
    '.tg',
    '.th',
    '.tienda',
    '.tips',
    '.tires',
    '.tirol',
    '.tk',
    '.tl',
    '.tm',
    '.tn',
    '.to',
    '.today',
    '.tokyo',
    '.tools',
    '.top',
    '.toshiba',
    '.tours',
    '.town',
    '.toys',
    '.tp',
    '.tr',
    '.trade',
    '.training',
    '.travel',
    '.trust',
    '.tui',
    '.tv',
    '.tw',
    '.tz',
    '.ua',
    '.ug',
    '.uk',
    '.university',
    '.uno',
    '.uol',
    '.us',
    '.uy',
    '.uz',
    '.va',
    '.vacations',
    '.vc',
    '.ve',
    '.vegas',
    '.ventures',
    '.versicherung',
    '.vet',
    '.vg',
    '.viajes',
    '.video',
    '.villas',
    '.vip',
    '.vision',
    '.vlaanderen',
    '.vodka',
    '.vote',
    '.voting',
    '.voto',
    '.voyage',
    '.vu',
    '.wales',
    '.wang',
    '.watch',
    '.webcam',
    '.website',
    '.wed',
    '.wedding',
    '.wf',
    '.whoswho',
    '.wien',
    '.wiki',
    '.wme',
    '.work',
    '.works',
    '.world',
    '.ws',
    '.wtc',
    '.wtf',
    '.xin',
    '.xn--1qqw23a',
    '.xn--3bst00m',
    '.xn--3ds443g',
    '.xn--3e0b707e',
    '.xn--45q11c',
    '.xn--4gbrim',
    '.xn--55qw42g',
    '.xn--55qx5d',
    '.xn--6frz82g',
    '.xn--6qq986b3xl',
    '.xn--80adxhks',
    '.xn--80ao21a',
    '.xn--80asehdb',
    '.xn--80aswg',
    '.xn--c1avg',
    '.xn--cg4bki',
    '.xn--clchc0ea0b2g2a9gcd',
    '.xn--czrs0t',
    '.xn--czru2d',
    '.xn--d1acj3b',
    '.xn--d1alf',
    '.xn--fiq228c5hs',
    '.xn--fiq64b',
    '.xn--fiqs8s',
    '.xn--fiqz9s',
    '.xn--flw351e',
    '.xn--hxt814e',
    '.xn--i1b6b1a6a2e',
    '.xn--io0a7i',
    '.xn--j1amh',
    '.xn--j6w193g',
    '.xn--kprw13d',
    '.xn--kpry57d',
    '.xn--kput3i',
    '.xn--lgbbat1ad8j',
    '.xn--mgb9awbf',
    '.xn--mgba3a4f16a',
    '.xn--mgbaam7a8h',
    '.xn--mgbab2bd',
    '.xn--mgberp4a5d4ar',
    '.xn--mgbx4cd0ab',
    '.xn--mxtq1m',
    '.xn--ngbc5azd',
    '.xn--nqv7f',
    '.xn--nqv7fs00ema',
    '.xn--o3cw4h',
    '.xn--ogbpf8fl',
    '.xn--p1acf',
    '.xn--p1ai',
    '.xn--q9jyb4c',
    '.xn--qcka1pmc',
    '.xn--rhqv96g',
    '.xn--ses554g',
    '.xn--unup4y',
    '.xn--vermgensberater-ctb',
    '.xn--vermgensberatung-pwb',
    '.xn--vhquv',
    '.xn--wgbl6a',
    '.xn--xhq521b',
    '.xn--yfro4i67o',
    '.xn--ygbi2ammx',
    '.xn--zfr164b',
    '.xxx',
    '.xyz',
    '.yachts',
    '.yodobashi',
    '.yoga',
    '.youtube',
    '.yt',
    '.zip',
    '.zm',
    '.zone',
    '.zuerich',
]);
