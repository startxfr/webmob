Ext.define('.model.BD', {
    extend: 'Ext.data.Model',
    
    config: {
        fields: [
            {name: 'id', type: 'int'},
            {name: 'titre', type: 'auto'},
            {name: 'auteur', type: 'auto'}
        ]
    }
});