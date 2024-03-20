import Vendor from "./models/vendorModel";
import VendorView from "./views/vendorView";
$(function(){
    const vendor = new Vendor({VendorName: 'Vendor1'});
    const vendorView = new VendorView({model: vendor});
    $('body').append(vendorView.render().el);
});