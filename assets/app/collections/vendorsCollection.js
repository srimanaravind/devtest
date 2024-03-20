import Vendor from "../models/vendorModel";

const VendorsCollection = Backbone.Collection.extend({
    model: Vendor,
    url: '/vendor'
});