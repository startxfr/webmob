Ext.define("mybd.view.Main", {
    extend: 'Ext.tab.Panel',
    requires: [
    'Ext.TitleBar',
    'Ext.Video'
    ],
    config: {
        tabBarPosition: 'bottom',
        items: [
        {
            title: 'Accueil',
            iconCls: 'home',
            styleHtmlContent: true,
            scrollable: true,
            items: [
            {
                docked: 'top',
                xtype: 'titlebar',
                title: 'Bienvenue sur myBD.fr'
            },{
                html: "<p>Vous trouverez sur ce site toutes les informations utiles sur le monde de la bande dessin&eacute;e. Ce site est fait pour vous aider a trouver plein d'informations sur vos personnages de BD favoris.</p>"
            }, {
                xtype: 'video',
                url: 'http://clips.vorwaerts-gmbh.de/VfE_html5.mp4',
                posterUrl: '../../img/video.jpg'
            }
            ]
        },
        {
            title: 'Recherche',
            iconCls: 'search',
            items: [ {
                docked: 'top',
                xtype: 'titlebar',
                title: 'Recherche',
                items: [
                {
                    iconCls: 'search',
                    iconMask: true,
                    align: 'right'
                },
                {
                    iconCls: 'home',
                    iconMask: true,
                    align: 'left'
                }
                ]
            },
            {
                xtype: 'textfield',
                name : 'auteur',
                label: 'auteur',
                placeHolder : "Nom d'auteur"
            },
            {
                xtype: 'textfield',
                name : 'nationalite',
                label: 'nationalité'
            },
            {
                xtype: 'textfield',
                name : 'titre',
                label: 'titre'
            },
            {
                xtype: 'datepickerfield',
                name : 'annee',
                label: 'année'
            },
            {
                xtype: 'textfield',
                name : 'prix',
                label: 'prix'
            },
            {
                xtype: 'textfield',
                name : 'dispo',
                label: 'disponible'
            }

            ]
        }
        , {
            title: 'Nouveautés',
            iconCls: 'star',
            items: [ {
                docked: 'top',
                xtype: 'titlebar',
                title: 'Nouveautés'
            },
            Ext.create('mybd.view.Nouveautes')
            ]
        }
        ,{
            title: 'Hasard',
            iconCls: 'more',
            items: [ {
                docked: 'top',
                xtype: 'titlebar',
                title: 'Hasard'
            },
            Ext.create('mybd.view.Hasard')
            ]
        },
        {
            title: 'Info Legales',
            iconCls: 'team',
            items: [ {
                docked: 'top',
                xtype: 'titlebar',
                title: 'Info Legales'
            },
            Ext.create('mybd.view.Legales')
            ]
        }
        ]
    }
});
