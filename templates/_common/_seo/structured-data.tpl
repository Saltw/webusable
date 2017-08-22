<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "{$core.config.site}",
{if $core.config.location_alias != ""}
    "alternateName": "{$core.config.location_alias}",
{/if}
{if $core.config.location_legal != ""}
    "legalName": "{$core.config.location_legal}",
{/if}
    "url": "{$core.config.baseurl}",
    "logo": {
        "@type": "ImageObject",
        // "width": 960,
        // "height": 720,
        "url": "{$core.config.baseurl}uploads/{$core.config.site_logo}"
    },
{if $core.config.website_social == 1}
    "sameAs": [
        "{$core.config.website_social_y}",
        "{$core.config.website_social_f}",
        "{$core.config.website_social_g}",
        "{$core.config.website_social_i}",
        "{$core.config.website_social_h}",
        "{$core.config.website_social_t}"],
{/if}
{if $core.config.location_check == 1}
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "{$core.config.location_street}",
        "addressLocality": "{$core.config.location_locality}",
        "addressRegion": "{$core.config.location_region}",
        "postalCode": "{$core.config.location_cp}",
        "addressCountry": "{$core.config.location_country}"
    },
{if ($core.config.location_latitud != "") && ($core.config.location_longitud != "")}
    "location": {
        "@type": "Place",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "{$core.config.location_latitud}",
            "longitude": "{$core.config.location_longitud}"
        },
        "hasMap": {
            "@type": "Map",
            "mapType": "http://schema.org/VenueMap",
            "url": "{$core.config.location_hasMap}"
        },
        "name": "{$core.config.site}"
    },
{/if}
{/if}
{if ($core.config.location_tel_1 != "") && ($core.config.location_tel_2 != "")}
    "contactPoint": [
        {
            "@type": "ContactPoint",
            "telephone": "({$core.config.location_tel_prefix}) {$core.config.location_tel_1|regex_replace:'/(\d{3})(\d{3})(\d{3})/':'\1-\2-\3'}",
{if ($core.config.location_tel_fax != "")}
            "faxNumber": "({$core.config.location_tel_prefix}) {$core.config.location_tel_fax|regex_replace:'/(\d{3})(\d{3})(\d{3})/':'\1-\2-\3'}",
{/if}
{if ($core.config.location_tel_fax != "")}
            "email": "{$core.config.location_email}",
{/if}
            "contactType": "customer service"
        }, {
            "@type": "ContactPoint",
            "telephone": "({$core.config.location_tel_prefix}) {$core.config.location_tel_2|regex_replace:'/(\d{3})(\d{3})(\d{3})/':'\1-\2-\3'}",
            "contactType": "technical support"
        }
    ],
{elseif ($core.config.location_tel_1 != "")}
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "({$core.config.location_tel_prefix}) {$core.config.location_tel_1|regex_replace:'/(\d{3})(\d{3})(\d{3})/':'\1-\2-\3'}",
{if ($core.config.location_tel_fax != "")}
        "faxNumber": "({$core.config.location_tel_prefix}) {$core.config.location_tel_fax|regex_replace:'/(\d{3})(\d{3})(\d{3})/':'\1-\2-\3'}",
{/if}
{if ($core.config.location_tel_fax != "")}
        "email": "{$core.config.location_email}",
{/if}
        "contactType": "customer service"
    },
{/if}
    "@id": "{$core.config.baseurl}#organization"
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "{$core.config.site}",
    "description": "Backed by industry-leading data and the largest community of SEOs on the planet, Moz builds tools that make inbound marketing easy. Start your free trial today!",
    "url": "https://moz.com/",
    "image": "https://d2eeipcrcdle6.cloudfront.net/cms/moz_logo.svg?mtime=20161223191415",
    "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
    "copyrightHolder": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "author": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "creator": {
        "@type": "Organization",
        "name": "Moz",
        "alternateName": "SEOMoz",
        "location": {
            "@type": "Place",
            "name": "Moz",
            "alternateName": "SEOMoz"
        }
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "Moz",
    "description": "{$core.page['meta-description']}",
    "url": "https://moz.com/",
    "image": "https://d2eeipcrcdle6.cloudfront.net/cms/moz_logo.svg?mtime=20161223191415",
    "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
    "copyrightHolder": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "author": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "creator": {
        "@type": "Organization",
        "name": "Moz",
        "alternateName": "SEOMoz",
        "location": {
            "@type": "Place",
            "name": "Moz",
            "alternateName": "SEOMoz"
        }
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "Moz | SEO Software, Tools &amp; Resources for Smarter Marketing",
    "description": "Backed by the largest community of SEOs on the planet, Moz builds tools that make SEO, inbound marketing, link building, and content marketing easy. Start your free 30-day trial today!",
    "image": {
        "@type": "ImageObject",
        "url": "https://d2eeipcrcdle6.cloudfront.net/cms/Moz-logo-blue.jpg?mtime=20170419135147",
        "width": "862",
        "height": "252"
    },
    "url": "https://moz.com/",
    "mainEntityOfPage": "https://moz.com/",
    "inLanguage": "en_us",
    "headline": "Moz | SEO Software, Tools &amp; Resources for Smarter Marketing",
    "keywords": "SEO",
    "dateCreated": "2016-10-06T22:11:03+0000",
    "dateModified": "2017-07-11T18:02:16+0000",
    "datePublished": "2017-05-08T21:34:26+0000",
    "copyrightYear": "2017",
    "author": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "publisher": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "copyrightHolder": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": "1",
                "item": {
                    "@id": "https://moz.com/",
                    "name": "Homepage"
                }
            }
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "https://moz.com/",
                "name": "Homepage"
            }
        }
    ]
}
</script>



<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "https://moz.com/",
                "name": "Homepage"
            }
        }
    ]
}
</script>


<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name": "$Nombre",
    "url" : "$PáginaWeb",
    "logo": "$logo",
    "sameAs" : [
        "$facebook",
        "$twitter",
        "$google+",
        "$instagram",
        "$youtube",
        "$linkedin"
    ],
    "description" : "$Descripción",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "$Dirección",
        "addressRegion": "$Estado/region",
        "addressLocality": "$cuidad",
        "postalCode": "$CódigoPostal",
        "addressCountry": "$País"
    },
    "email": "$Correoelectrónico",
    "telephone": "$telephone",
    "faxNumber": "$Fax",
    "contactPoint" : [
        {
            "@type" : "ContactPoint",
            "contactType" : "$selector",
            "telephone" : "$telefonodetalle",
            "areaServed" : "$ES",
            "availableLanguage" : "$lenguajeatendido",
            "contactOption" : "$costellamada"
        },
        {
            "@type" : "ContactPoint",
            "contactType" : "$selector",
            "telephone" : "$telefonodetalle",
            "areaServed" : "$ES",
            "availableLanguage" : "$lenguajeatendido",
            "contactOption" : "$costellamada"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "Moz",
    "description": "Backed by industry-leading data and the largest community of SEOs on the planet, Moz builds tools that make inbound marketing easy. Start your free trial today!",
    "url": "https://moz.com/",
    "image": "https://d2eeipcrcdle6.cloudfront.net/cms/moz_logo.svg?mtime=20161223191415",
    "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
    "copyrightHolder": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "author": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "creator": {
        "@type": "Organization",
        "name": "Moz",
        "alternateName": "SEOMoz",
        "location": {
            "@type": "Place",
            "name": "Moz",
            "alternateName": "SEOMoz"
        }
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "Moz | SEO Software, Tools &amp; Resources for Smarter Marketing",
    "description": "Backed by the largest community of SEOs on the planet, Moz builds tools that make SEO, inbound marketing, link building, and content marketing easy. Start your free 30-day trial today!",
    "image": {
        "@type": "ImageObject",
        "url": "https://d2eeipcrcdle6.cloudfront.net/cms/Moz-logo-blue.jpg?mtime=20170419135147",
        "width": "862",
        "height": "252"
    },
    "url": "https://moz.com/",
    "mainEntityOfPage": "https://moz.com/",
    "inLanguage": "en_us",
    "headline": "Moz | SEO Software, Tools &amp; Resources for Smarter Marketing",
    "keywords": "SEO",
    "dateCreated": "2016-10-06T22:11:03+0000",
    "dateModified": "2017-07-11T18:02:16+0000",
    "datePublished": "2017-05-08T21:34:26+0000",
    "copyrightYear": "2017",
    "author": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "publisher": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "copyrightHolder": {
        "@type": "Corporation",
        "name": "Moz",
        "url": "https://moz.com",
        "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"],
        "location": {
            "@type": "Place",
            "name": "Moz",
            "url": "https://moz.com",
            "sameAs": ["https://twitter.com/@Moz","https://www.facebook.com/moz","https://www.linkedin.com/company/moz"]
        }
    },
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": "1",
                "item": {
                    "@id": "https://moz.com/",
                    "name": "Homepage"
                }
            }
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "https://moz.com/",
                "name": "Homepage"
            }
        }
    ]
}
</script>
