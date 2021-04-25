"use strict";

export default class OrdersAnalyzer {
    constructor() {
        this.weekdays = ["SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY"];
    }


    /**
     * 
     * @param {Integer} productId 
     * @param {Array} orders 
     * 
     * @TODO This function is enougth to solve this mock, but if there's some order with duplicated productId, will not sum.
     * Therefore, I should use Reduce method indeed, not "find method"
     */
    totalQuantity(productId, orders) {
        let daysOfWeek = {};
        this.weekdays.forEach(item => {
            return daysOfWeek[item] = 0 
        })
        
        orders.forEach(order => {
            let products = order.orderLines.find(item => item.productId == productId) || [], dayofweek = this.getDayOfWeek(order.creationDate);
            if(!Object.keys(products).length) return;

            daysOfWeek[dayofweek] += products.quantity;

        })
        return daysOfWeek;
    }

    /**
     * 
     * @param {String} date 
     */
    getDayOfWeek(date) {
        return this.weekdays[new Date(date).getDay()];
    }

}
