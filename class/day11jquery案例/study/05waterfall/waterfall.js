function waterfall(){
  
   // 瀑布流容器:$('.items')  
   // 要布局的目标是:$('.items').children()
   // 要设置高度的容器是瀑布流容器:$('.items')
   // 瀑布流容器
   var container = $('.items');
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


//    // 0
//    items.eq(0).css({
//        top:0,
//        left:0
//    })
//    arr[0] = items.eq(0).height()
//    // 1
//    items.eq(1).css({
//         top:0,
//         left:(width+columnSpace)*1
//    })
//    arr[1] = items.eq(1).height()
//    // 2 
//    items.eq(2).css({
//         top:0,
//         left:(width+columnSpace)*2
//     })
//     arr[2] = items.eq(2).height()
//     // 3 
//     items.eq(3).css({
//     top:0,
//     left:(width+columnSpace)*3
// })
//     arr[3] = items.eq(3).height()

//     // 4 
//     items.eq(4).css({
//         top:0,
//         left:(width+columnSpace)*4
//     })
//     arr[4] = items.eq(4).height()
//     // 从索引是5的item开始，每次定位之前要看哪一列是最短的
//     var minIndex = 0;
//     var min = arr[0];
//     for(var i=0;i<arr.length;i++){
//         if(arr[i]<min){
//             minIndex = i;
//             min = arr[minIndex]
//         }
//     }
//     console.log(minIndex)
//     console.log(min)
//     // 5 
//     items.eq(5).css({
//         top:min+rowSpace,
//         left:(width+columnSpace)*minIndex
//     })
//     arr[minIndex] = arr[minIndex] + items.eq(5).height() + rowSpace

//     // 6 
          
}