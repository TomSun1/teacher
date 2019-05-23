-- 学区表
create table SchoolArea(
  Code char(3) primary key,
  Name nvarchar(50) not null,-- 学区名称
  Address nvarchar(100),-- 学区地址
  Phone varchar(50),-- 电话号码
  CreateTime datetime not null default now(),-- 创建时间
  UpdateTime datetime not null default now()-- 更新时间
);

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

create table Teacher(
  Code char(8) primary key,
  Name nvarchar(50) not null,-- 学区名称
  Phone varchar(50),-- 电话号码
  SchoolArea_Code char(3),-- 校区代码
  HeadPhoto binary,-- 头像照片
  Description nvarchar(2000),-- 描述
  Enabled bool not null default true,-- 是否有效
  CreateTime datetime not null default now(),-- 创建时间
  Creator varchar(50) not null,-- 创建人
  UpdateTime datetime not null default now()-- 更新时间
)


