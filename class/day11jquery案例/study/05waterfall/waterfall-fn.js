(function(){

    // 扩展在juqery实例对象上
    $.fn.extend({
        waterfall:function (){
            // console.log(this)
            // 瀑布流容器:$('.items')  
            // 要布局的目标是:$('.items').children()
            // 要设置高度的容器是瀑布流容器:$('.items')
            // 瀑布流容器
            var container = this;
            // 要布局的目标
            var items = container.children()
            // 列宽:就是每个item的宽度
            var width = items.width();
            // 总宽度
            var total = container.width();
            // 列数
            var column = 5;
            // 列间隙
            var columnSpace = (total - column*width)/(column-1);//10
            // 行间隙
            var rowSpace = 10;
            // 需要一个数组记录每一列高度
            var arr = new Array(column);
            // 给每个item进行定位
            items.each(function(index,item){
                 // index就是遍历到的item是所有item里面的第几个
                 // item就是遍历到的哪个dom元素，要jquery实例对象$(item);
                 if(index<column){
                     $(item).css({
                         top:0,
                         left:(width+columnSpace)*index
                     })
                     arr[index] = $(item).height()
                 }else{
                     // 求出最短的那一列的高度，以及是哪一列
                     var minIndex = 0;
                     var min = arr[0]
                     for(var i=0;i<arr.length;i++){
                         if(arr[i]<min){
                             minIndex = i;
                             min = arr[minIndex];
                         }
                     }
                     // 给这个item定位
                     $(item).css({
                         top:min + rowSpace,
                         left:(width+columnSpace)*minIndex
                     })
                     // 更新minIndex列的高度
                     arr[minIndex] = arr[minIndex]+$(item).height()+rowSpace;
                 }
                 
            })
            // 瀑布流容器设置高度
            var max = Math.max.apply(null,arr);
            container.css('height',max)
         }
    })


    // 扩展在全局的juqery对象上
    // $.extend({
    //     waterfall:function (){
    //         // 瀑布流容器:$('.items')  
    //         // 要布局的目标是:$('.items').children()
    //         // 要设置高度的容器是瀑布流容器:$('.items')
    //         // 瀑布流容器
    //         var container = $('.items');
    //         // 要布局的目标
    //         var items = container.children()
    //         // 列宽:就是每个item的宽度
    //         var width = items.width();
    //         // 总宽度
    //         var total = container.width();
    //         // 列数
    //         var column = 5;
    //         // 列间隙
    //         var columnSpace = (total - column*width)/(column-1);//10
    //         // 行间隙
    //         var rowSpace = 10;
    //         // 需要一个数组记录每一列高度
    //         var arr = new Array(column);
    //         // 给每个item进行定位
    //         items.each(function(index,item){
    //              // index就是遍历到的item是所有item里面的第几个
    //              // item就是遍历到的哪个dom元素，要jquery实例对象$(item);
    //              if(index<column){
    //                  $(item).css({
    //                      top:0,
    //                      left:(width+columnSpace)*index
    //                  })
    //                  arr[index] = $(item).height()
    //              }else{
    //                  // 求出最短的那一列的高度，以及是哪一列
    //                  var minIndex = 0;
    //                  var min = arr[0]
    //                  for(var i=0;i<arr.length;i++){
    //                      if(arr[i]<min){
    //                          minIndex = i;
    //                          min = arr[minIndex];
    //                      }
    //                  }
    //                  // 给这个item定位
    //                  $(item).css({
    //                      top:min + rowSpace,
    //                      left:(width+columnSpace)*minIndex
    //                  })
    //                  // 更新minIndex列的高度
    //                  arr[minIndex] = arr[minIndex]+$(item).height()+rowSpace;
    //              }
                 
    //         })
    //         // 瀑布流容器设置高度
    //         var max = Math.max.apply(null,arr);
    //         container.css('height',max)
    //      }
    // })
})()