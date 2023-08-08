@props([
    'description' => '',
    'keywords' => '',
    'twitterHandle' => '',
    'siteURL' => '',
    'imagePreview' => '',
    'title' => ''
])
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Laravel Ecommerce Demo' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography,forms"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                height: theme => ({
                    '112': '28rem',
                    '120': '30rem',
                }),
                minHeight: theme => ({
                    '80': '20rem',
                }),
                colors: {
                    palette: {
                    lighter: '#F5F3FF',
                    light: '#DDD6FE',
                    primary: '#5B21B6',
                    dark: '#4C1D95',
                    },
                },
                fontFamily: {
                    primary: ['"Josefin Sans"']
                }
                },
            }
        }
      </script>
    <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content={{ $description }} />
    <meta name="keywords" content={{ $keywords }} />
    
    <meta name="twitter:card" content="summary_large_image" key="twcard" />
    <meta name="twitter:creator" content={{ $twitterHandle}} key="twhandle" />

    <meta property="og:url" content={{ $siteURL }} key="ogurl" />
    <meta property="og:image" content={{ $imagePreview }} key="ogimage" />
    <meta property="og:site_name" content={{ $siteURL }} key="ogsitename" />
    <meta property="og:title" content={{ $title }} key="ogtitle" />
    <meta property="og:description" content={{ $description }} key="ogdesc" />

    <link rel="manifest" href="/manifest.json" />
    <link
      href="/icons/icon-16x16.png"
      rel="icon"
      type="image/png"
      sizes="16x16"
      purpose="any maskable"
    />
    <link
      href="/icons/icon-32x32.png"
      rel="icon"
      type="image/png"
      sizes="32x32"
      purpose="any maskable"
    />
    <link rel="apple-touch-icon" href="/apple-icon.png"></link>
    <meta name="theme-color" content="#EF4444" />
  </head>