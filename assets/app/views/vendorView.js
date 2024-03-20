const VendorView = Backbone.View.extend({
    tagName: "div",

    template: _.template("<h2><%= VendorName %></h2>"),

    render: function(){
        this.$el.html(this.template(this.model.toJSON()));
        return this;
    },

    initialize: function(){
        this.listenTo(this.model, "change", this.render);
    }
});

export default VendorView;