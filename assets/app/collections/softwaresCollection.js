import Software from "../models/softwareModel";

const softwaresCollection = Backbone.Collection.extend({
    model: Software,
    url: '/software'
});