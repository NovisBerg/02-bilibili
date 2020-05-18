Page({

  /**
   * 页面的初始数据
   */
  data: {
      // 当前选中的首页导航的菜单索引
      currentIndexNav: 0,
      // 首页导航数据
      navList: [],
      // 轮播图数据
      swiperList: [],
      // 视频列表数据
      videosList: []
  },

    /**
     * 获取首页的导航数据
     */
    getNavList() {
        let that = this
      // 利用小程序内置的发送请求的方法
      wx.request({
          url: 'http://localhost/MiniBili/getNavList.php',
          success(res){
              // console.log(res)
              if (res.statusCode === 200) {
                  that.setData({
                      navList: res.data
                  })
              }
          }
      })
    },

    // 点击首页导航按钮
    activeNav(e) {
        // console.log(e)
        this.setData({
            currentIndexNav: e.target.dataset.index
        })
    },

    /*
    获取轮播图数据
     */
    getSwiperList() {
        let that = this
        wx.request({
            url: 'http://localhost/MiniBili/getSwiperList.php',
            success(res) {
                // console.log(res)
                if (res.statusCode === 200) {
                    that.setData({
                        swiperList: res.data
                    })
                }
            }
        })
    },

    /*
    获取首页视频列表
     */
    getVideosList() {
        let that = this
        wx.request({
            url: 'http://localhost/MiniBili/getVideosList.php',
            success(res) {
                // console.log(res)
                if (res.statusCode === 200) {
                    that.setData({
                        videosList: res.data
                    })
                }
            }
        })
    },


  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
      // 1 获取首页导航数据
      this.getNavList()
      // 2 获取轮播图数据
      this.getSwiperList()
      // 3 获取首页视频数据
      this.getVideosList()
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
    
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
    
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
    
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
    
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
    
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
    
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
    
  }
})
