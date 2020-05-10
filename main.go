package main

import (
	"context"
	"fmt"
	"net"
	"os"
	"os/signal"

	"github.com/eroluysal/eggrpc/proto"
	"google.golang.org/grpc"
)

type server struct{}

func (s *server) Add(ctx context.Context, request *proto.StatRequest) (*proto.StatResponse, error) {
	id, pid, raw := request.GetId(), request.GetPid(), request.GetRaw()

	v := &proto.StatResponse{
		Pid:     pid,
		Status:  raw,
		Message: fmt.Sprintf("pid: %d, id: %d, raw: %t", pid, id, raw),
	}

	return v, nil
}

func main() {
	l, err := net.Listen("tcp", ":4040")
	if err != nil {
		panic(err)
	}

	srv := grpc.NewServer()
	proto.RegisterStatServiceServer(srv, &server{})
	//reflection.Register(srv)

	v := make(chan os.Signal)
	signal.Notify(v, os.Kill, os.Interrupt)
	go func() {
		<-v
		fmt.Println("goodbye. server closing...")
		os.Exit(1)
	}()

	if err := srv.Serve(l); err != nil {
		panic(err)
	}
}
