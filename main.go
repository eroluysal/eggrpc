package main

import (
	"context"
	"fmt"
	"net"

	"github.com/eroluysal/eggrpc/proto"
	"google.golang.org/grpc"
	"google.golang.org/grpc/reflection"
)

type server struct{}

func (s *server) Add(ctx context.Context, request *proto.StatRequest) (*proto.StatResponse, error) {
	id, pid, raw := request.GetId(), request.GetPid(), request.GetRaw()

	v := &proto.StatResponse{
		Pid:     pid,
		Status:  raw,
		Message: fmt.Sprintf("its working on %d - %t", id, raw),
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
	reflection.Register(srv)

	if err := srv.Serve(l); err != nil {
		panic(err)
	}
}