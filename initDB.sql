-- 学区表
create table SchoolArea(
  Code char(3) primary key,
  Name nvarchar(50) not null,-- 学区名称
  HeadPhoto binary,-- 头像照片
  Address nvarchar(100),-- 学区地址
  Phone varchar(50),-- 电话号码
  CreateTime datetime not null default now(),-- 创建时间
  UpdateTime datetime not null default now()-- 更新时间
);
-- 管理员表  内置SystemAdmin超级用户  校区为000
create table Manager(
  Login char(50) primary key,-- 登录账号
  Password char(36) not null,-- 登录密码
  Name nvarchar(50) not null, -- 姓名
  Phone varchar(50),-- 电话号码
  SchoolArea_Code char(3),-- 校区代码
  Position nvarchar(50),-- 职位
  Enabled bool not null default true,-- 是否有效
  CreateTime datetime not null default now(),-- 创建时间
  Creator varchar(50) not null,-- 创建人
  UpdateTime datetime not null default now()-- 更新时间
);
--  教师表
create table Teacher(
  Code char(8) primary key,  -- 教师代码  3位校区+5位教师流水
  SubjectId int not null,    -- 科目ID 0-英语，1-数学，2-语文
  Name nvarchar(50) not null,-- 学区名称
  Phone varchar(50),-- 电话号码
  SchoolArea_Code char(3),-- 校区代码
  HeadPhoto binary,-- 头像照片
  Enabled bool not null default true,-- 是否有效
  CreateTime datetime not null default now(),-- 创建时间
  Creator varchar(50) not null,-- 创建人
  UpdateTime datetime not null default now(),-- 更新时间
  Updater varchar(50) not null-- 更新人
);
-- 描述表  所有教师下面的介绍，都写在这个表里，通过Teacher_Code关联,OrderId排序,Title为分类文字
create table Descrption(
  Teacher_Code char(8),   -- 联合主键 教师代码
  OrderId int,            -- 联合主键 排序ID
  Title nvarchar(50) not null,-- 标题
  Content nvarchar(4000) not null,-- 内容
  CreateTime datetime not null default now(),-- 创建时间
  Creator varchar(50) not null,-- 创建人
  UpdateTime datetime not null default now(),-- 更新时间
  Updater varchar(50) not null-- 更新人
);
--  照片表
create table Photo(
  Teacher_Code char(8),   -- 联合主键 教师代码
  GroupId int,            -- 联合主键 分组ID
  OrderId int,            -- 联合主键 排序ID
  FileName varchar(500) not null,-- 文件名称
  Descrption nvarchar(50),-- 照片描述
  CreateTime datetime not null default now(),-- 创建时间
  Creator varchar(50) not null,-- 创建人
  UpdateTime datetime not null default now(),-- 更新时间
  Updater varchar(50) not null-- 更新人
);
--  视频表
create table Video(
  Teacher_Code char(8),   -- 联合主键 教师代码
  GroupId int,            -- 联合主键 分组ID
  OrderId int,            -- 联合主键 排序ID
  FileName varchar(500) not null,-- 文件名称
  Descrption nvarchar(50),-- 照片描述
  CreateTime datetime not null default now(),-- 创建时间
  Creator varchar(50) not null,-- 创建人
  UpdateTime datetime not null default now(),-- 更新时间
  Updater varchar(50) not null-- 更新人
);

