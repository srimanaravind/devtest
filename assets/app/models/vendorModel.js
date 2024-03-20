const Vendor = Backbone.Model.extend({

    urlRoot: '/vendors',

    defaults: {
        id: null,
        VendorName: null
    },

    getId: function() {
        return this.get('id');
    },

    getVendorName: function() {
        return this.get('VendorName');
    },

    setVendorName: function(VendorName) {
        this.set({ VendorName: VendorName });
    }
});

export default Vendor;