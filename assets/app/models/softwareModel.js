const Software = Backbone.Model.extend({

    urlRoot: '/software',

    defaults: {
        id: null,
        ProductName: null,
        vendor: null
    },

    getId: function () {
        return this.get('id');
    },

    getProductName: function () {
        return this.get('ProductName');
    },

    setProductName: function (productName) {
        this.set('ProductName', productName);
    },

    getVendor: function () {
        return this.get('vendor');
    },

    setVendor: function (vendor) {
        this.set('vendor', vendor);
    },
});